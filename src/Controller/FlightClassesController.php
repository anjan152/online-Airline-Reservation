<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FlightClasses Controller
 *
 * @property \App\Model\Table\FlightClassesTable $FlightClasses
 * @method \App\Model\Entity\FlightClass[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlightClassesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $flightClasses = $this->paginate($this->FlightClasses);

        $this->set(compact('flightClasses'));
    }
    public function select($flightId)
    {
        $this->Authorization->skipAuthorization();
        $flightClasses = $this->paginate($this->FlightClasses);

        $this->set(compact('flightId','flightClasses'));
    }



    /**
     * View method
     *
     * @param string|null $id Flight Class id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $flightClass = $this->FlightClasses->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('flightClass'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flightClasses= $this->FlightClasses->newEmptyEntity();
        $this->Authorization->authorize($flightClasses);

        $flightClass = $this->FlightClasses->newEmptyEntity();
        if ($this->request->is('post')) {
            $flightClass = $this->FlightClasses->patchEntity($flightClass, $this->request->getData());
            if ($this->FlightClasses->save($flightClass)) {
                $this->Flash->success(__('The flight class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight class could not be saved. Please, try again.'));
        }
        $this->set(compact('flightClass'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight Class id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flightClass= $this->FlightClasses->newEmptyEntity();
        $this->Authorization->authorize($flightClass);

        $flightClass = $this->FlightClasses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flightClass = $this->FlightClasses->patchEntity($flightClass, $this->request->getData());
            if ($this->FlightClasses->save($flightClass)) {
                $this->Flash->success(__('The flight class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight class could not be saved. Please, try again.'));
        }
        $this->set(compact('flightClass'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight Class id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $flightClasses = $this->FlightClasses->newEmptyEntity();
        $this->Authorization->authorize($flightClasses);

        $this->request->allowMethod(['post', 'delete']);
        $flightClass = $this->FlightClasses->get($id);
        if ($this->FlightClasses->delete($flightClass)) {
            $this->Flash->success(__('The flight class has been deleted.'));
        } else {
            $this->Flash->error(__('The flight class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
