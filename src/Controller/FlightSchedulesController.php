<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FlightSchedules Controller
 *
 * @property \App\Model\Table\FlightSchedulesTable $FlightSchedules
 * @method \App\Model\Entity\FlightSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlightSchedulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Flights'],
        ];
        $flightSchedules = $this->paginate($this->FlightSchedules);

        $this->set(compact('flightSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Flight Schedule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flightSchedule = $this->FlightSchedules->get($id, [
            'contain' => ['Flights'],
        ]);

        $this->set(compact('flightSchedule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flightSchedule = $this->FlightSchedules->newEmptyEntity();
        if ($this->request->is('post')) {
            $flightSchedule = $this->FlightSchedules->patchEntity($flightSchedule, $this->request->getData());
            if ($this->FlightSchedules->save($flightSchedule)) {
                $this->Flash->success(__('The flight schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight schedule could not be saved. Please, try again.'));
        }
        $flights = $this->FlightSchedules->Flights->find('list', ['limit' => 200]);
        $this->set(compact('flightSchedule', 'flights'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight Schedule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flightSchedule = $this->FlightSchedules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flightSchedule = $this->FlightSchedules->patchEntity($flightSchedule, $this->request->getData());
            if ($this->FlightSchedules->save($flightSchedule)) {
                $this->Flash->success(__('The flight schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight schedule could not be saved. Please, try again.'));
        }
        $flights = $this->FlightSchedules->Flights->find('list', ['limit' => 200]);
        $this->set(compact('flightSchedule', 'flights'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight Schedule id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flightSchedule = $this->FlightSchedules->get($id);
        if ($this->FlightSchedules->delete($flightSchedule)) {
            $this->Flash->success(__('The flight schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The flight schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
