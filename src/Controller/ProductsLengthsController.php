<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsLengths Controller
 *
 * @property \App\Model\Table\ProductsLengthsTable $ProductsLengths
 */
class ProductsLengthsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Lengths']
        ];
        $productsLengths = $this->paginate($this->ProductsLengths);

        $this->set(compact('productsLengths'));
        $this->set('_serialize', ['productsLengths']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Length id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsLength = $this->ProductsLengths->get($id, [
            'contain' => ['Products', 'Lengths']
        ]);

        $this->set('productsLength', $productsLength);
        $this->set('_serialize', ['productsLength']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsLength = $this->ProductsLengths->newEntity();
        if ($this->request->is('post')) {
            $productsLength = $this->ProductsLengths->patchEntity($productsLength, $this->request->data);
            if ($this->ProductsLengths->save($productsLength)) {
                $this->Flash->success(__('The products length has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products length could not be saved. Please, try again.'));
        }
        $products = $this->ProductsLengths->Products->find('list', ['limit' => 200]);
        $lengths = $this->ProductsLengths->Lengths->find('list', ['limit' => 200]);
        $this->set(compact('productsLength', 'products', 'lengths'));
        $this->set('_serialize', ['productsLength']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Length id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsLength = $this->ProductsLengths->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsLength = $this->ProductsLengths->patchEntity($productsLength, $this->request->data);
            if ($this->ProductsLengths->save($productsLength)) {
                $this->Flash->success(__('The products length has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products length could not be saved. Please, try again.'));
        }
        $products = $this->ProductsLengths->Products->find('list', ['limit' => 200]);
        $lengths = $this->ProductsLengths->Lengths->find('list', ['limit' => 200]);
        $this->set(compact('productsLength', 'products', 'lengths'));
        $this->set('_serialize', ['productsLength']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Length id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsLength = $this->ProductsLengths->get($id);
        if ($this->ProductsLengths->delete($productsLength)) {
            $this->Flash->success(__('The products length has been deleted.'));
        } else {
            $this->Flash->error(__('The products length could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
