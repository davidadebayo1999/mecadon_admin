<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsSizes Controller
 *
 * @property \App\Model\Table\ProductsSizesTable $ProductsSizes
 */
class ProductsSizesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Sizes']
        ];
        $productsSizes = $this->paginate($this->ProductsSizes);

        $this->set(compact('productsSizes'));
        $this->set('_serialize', ['productsSizes']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Size id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsSize = $this->ProductsSizes->get($id, [
            'contain' => ['Products', 'Sizes']
        ]);

        $this->set('productsSize', $productsSize);
        $this->set('_serialize', ['productsSize']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsSize = $this->ProductsSizes->newEntity();
        if ($this->request->is('post')) {
            $productsSize = $this->ProductsSizes->patchEntity($productsSize, $this->request->data);
            if ($this->ProductsSizes->save($productsSize)) {
                $this->Flash->success(__('The products size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products size could not be saved. Please, try again.'));
        }
        $products = $this->ProductsSizes->Products->find('list', ['limit' => 200]);
        $sizes = $this->ProductsSizes->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('productsSize', 'products', 'sizes'));
        $this->set('_serialize', ['productsSize']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Size id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsSize = $this->ProductsSizes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsSize = $this->ProductsSizes->patchEntity($productsSize, $this->request->data);
            if ($this->ProductsSizes->save($productsSize)) {
                $this->Flash->success(__('The products size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products size could not be saved. Please, try again.'));
        }
        $products = $this->ProductsSizes->Products->find('list', ['limit' => 200]);
        $sizes = $this->ProductsSizes->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('productsSize', 'products', 'sizes'));
        $this->set('_serialize', ['productsSize']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Size id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsSize = $this->ProductsSizes->get($id);
        if ($this->ProductsSizes->delete($productsSize)) {
            $this->Flash->success(__('The products size has been deleted.'));
        } else {
            $this->Flash->error(__('The products size could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
