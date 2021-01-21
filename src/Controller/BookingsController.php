<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bookings Controller
 *
 * @property \App\Model\Table\BookingsTable $Bookings
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Flights', 'FlightClasses'],
        ];
        $this->Authorization->skipAuthorization();
        $bookings = $this->paginate($this->Bookings);

        $this->set(compact('bookings'));
    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => ['Users', 'Flights', 'FlightClasses'],
        ]);
        $this->Authorization->skipAuthorization();
        $this->set(compact('booking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Bookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $users = $this->Bookings->Users->find('list', ['limit' => 200]);
        $flights = $this->Bookings->Flights->find('list', ['limit' => 200]);
        $flightClasses = $this->Bookings->flightClasses->find('list', ['limit' => 200]);
        $this->set(compact('booking', 'users', 'flights', 'FlightClasses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $users = $this->Bookings->Users->find('list', ['limit' => 200]);
        $flights = $this->Bookings->Flights->find('list', ['limit' => 200]);
        $classes = $this->Bookings->Classes->find('list', ['limit' => 200]);
        $this->set(compact('booking', 'users', 'flights', 'Flightclasses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function buy($id=null,$classId, $scheduleId)
    {
        $this->Authorization->skipAuthorization();
        $lastSeatNo = $this->getLastSeatNumber($id);
        $booking=$this->Bookings->newEmptyEntity();
        $booking->flight_id=$id;
        $user=$this->Authentication->getIdentity();
        $booking->user_id=$user->id;
        $booking->frequent_flyer_discount=10;
        $booking->class_id=$classId;
        $booking->flight_schedule_id =$scheduleId;
        $booking->seat_no=$lastSeatNo + 1;
        $booking->date = date("Y/m/d");
        if($this->Bookings->save($booking))
        {
            $this->Flash->success(__('The flight has been booked.'));

        }
        else
        {
        $this->Flash->error(__('The flight could not be booked. Please, try again.'));
        }
        return $this->redirect(['action'=>'index']);
        
    }

    public function getLastSeatNumber($id){
        $flight = $this->Bookings->Flights->find('all')->where(['Flights.id ='=>$id]);
        $bookingsCount = $this->Bookings->find('all')->where(['Bookings.flight_id ='=>$id])->count();

        return $bookingsCount;
    }

}
