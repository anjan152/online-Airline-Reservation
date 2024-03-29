<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Flights Controller
 *
 * @property \App\Model\Table\FlightsTable $Flights
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlightsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $this->paginate = [
            'contain' => ['AircraftTypes'],
        ];
        $flights = $this->paginate($this->Flights);
        $user=$this->Authentication->getIdentity();
        $this->set(compact('flights','user'));
    }

    /**
     * View method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
         $this->Authorization->skipAuthorization();
        $flight = $this->Flights->get($id, [
            'contain' => ['AircraftTypes', 'Bookings', 'FlightSchedules'],
        ]);

        $this->set(compact('flight'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flight = $this->Flights->newEmptyEntity();
        $this->Authorization->authorize($flight);

        if ($this->request->is('post')) {
            $flight = $this->Flights->patchEntity($flight, $this->request->getData());
            if ($this->Flights->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight could not be saved. Please, try again.'));
        }
        $aircraftTypes = $this->Flights->AircraftTypes->find('list', ['limit' => 200]);
        $this->set(compact('flight', 'aircraftTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flight = $this->Flights->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($flight);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $flight = $this->Flights->patchEntity($flight, $this->request->getData());
            if ($this->Flights->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight could not be saved. Please, try again.'));
        }
        $aircraftTypes = $this->Flights->AircraftTypes->find('list', ['limit' => 200]);
        $this->set(compact('flight', 'aircraftTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flight = $this->Flights->get($id);
        $this->Authorization->authorize($flight);

        if ($this->Flights->delete($flight)) {
            $this->Flash->success(__('The flight has been deleted.'));
        } else {
            $this->Flash->error(__('The flight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function buy($id=null)
    {
        $booking=$this->Flights->Bookings->newEmptyEntity();
        $booking->flight_id=$id;
        $user=$this->Authentication->getIdentity();
        $booking->user_id=$user->id;
        $booking->frequent_flyer_discount=10;
        $booking->class_id=2;
        $booking->seat_no=1;
        if($this->Flights->Bookings->save($booking))
        {
            $this->Flash->success(__('The flight has been booked.'));

        }
        else
        {
        $this->Flash->error(__('The flight could not be booked. Please, try again.'));
        }
        return $this->redirect(['action'=>'index']);
        

    }
}

