<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AircraftTypes Controller
 *
 * @property \App\Model\Table\AircraftTypesTable $AircraftTypes
 * @method \App\Model\Entity\AircraftType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AircraftTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $aircraftTypes = $this->paginate($this->AircraftTypes);

        $this->set(compact('aircraftTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Aircraft Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $aircraftType = $this->AircraftTypes->get($id, [
            'contain' => ['Flights'],
        ]);

        $this->set(compact('aircraftType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $aircraftType = $this->AircraftTypes->newEmptyEntity();
        $this->Authorization->authorize($aircraftType);
        if ($this->request->is('post')) {
            $aircraftType = $this->AircraftTypes->patchEntity($aircraftType, $this->request->getData());
            if ($this->AircraftTypes->save($aircraftType)) {
                $this->Flash->success(__('The aircraft type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aircraft type could not be saved. Please, try again.'));
        }
        $this->set(compact('aircraftType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aircraft Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aircraftType = $this->AircraftTypes->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($aircraftType);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $aircraftType = $this->AircraftTypes->patchEntity($aircraftType, $this->request->getData());
            if ($this->AircraftTypes->save($aircraftType)) {
                $this->Flash->success(__('The aircraft type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aircraft type could not be saved. Please, try again.'));
        }
        $this->set(compact('aircraftType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aircraft Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aircraftType = $this->AircraftTypes->get($id);
        $this->Authorization->authorize($aircraftType);

        if ($this->AircraftTypes->delete($aircraftType)) {
            $this->Flash->success(__('The aircraft type has been deleted.'));
        } else {
            $this->Flash->error(__('The aircraft type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
