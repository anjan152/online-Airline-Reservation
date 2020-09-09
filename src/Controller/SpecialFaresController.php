<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SpecialFares Controller
 *
 * @property \App\Model\Table\SpecialFaresTable $SpecialFares
 * @method \App\Model\Entity\SpecialFare[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialFaresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $specialFares = $this->paginate($this->SpecialFares);

        $this->set(compact('specialFares'));
    }

    /**
     * View method
     *
     * @param string|null $id Special Fare id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialFare = $this->SpecialFares->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('specialFare'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialFare = $this->SpecialFares->newEmptyEntity();
        if ($this->request->is('post')) {
            $specialFare = $this->SpecialFares->patchEntity($specialFare, $this->request->getData());
            if ($this->SpecialFares->save($specialFare)) {
                $this->Flash->success(__('The special fare has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The special fare could not be saved. Please, try again.'));
        }
        $this->set(compact('specialFare'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Special Fare id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialFare = $this->SpecialFares->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialFare = $this->SpecialFares->patchEntity($specialFare, $this->request->getData());
            if ($this->SpecialFares->save($specialFare)) {
                $this->Flash->success(__('The special fare has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The special fare could not be saved. Please, try again.'));
        }
        $this->set(compact('specialFare'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Special Fare id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialFare = $this->SpecialFares->get($id);
        if ($this->SpecialFares->delete($specialFare)) {
            $this->Flash->success(__('The special fare has been deleted.'));
        } else {
            $this->Flash->error(__('The special fare could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
