<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsHands Controller
 *
 * @property \App\Model\Table\ProductsHandsTable $ProductsHands
 */
class ProductsHandsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Hands']
        ];
        $productsHands = $this->paginate($this->ProductsHands);

        $this->set(compact('productsHands'));
        $this->set('_serialize', ['productsHands']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Hand id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsHand = $this->ProductsHands->get($id, [
            'contain' => ['Products', 'Hands']
        ]);

        $this->set('productsHand', $productsHand);
        $this->set('_serialize', ['productsHand']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsHand = $this->ProductsHands->newEntity();
        if ($this->request->is('post')) {
            $productsHand = $this->ProductsHands->patchEntity($productsHand, $this->request->data);
            if ($this->ProductsHands->save($productsHand)) {
                $this->Flash->success(__('The products hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products hand could not be saved. Please, try again.'));
        }
        $products = $this->ProductsHands->Products->find('list', ['limit' => 200]);
        $hands = $this->ProductsHands->Hands->find('list', ['limit' => 200]);
        $this->set(compact('productsHand', 'products', 'hands'));
        $this->set('_serialize', ['productsHand']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Hand id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsHand = $this->ProductsHands->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsHand = $this->ProductsHands->patchEntity($productsHand, $this->request->data);
            if ($this->ProductsHands->save($productsHand)) {
                $this->Flash->success(__('The products hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products hand could not be saved. Please, try again.'));
        }
        $products = $this->ProductsHands->Products->find('list', ['limit' => 200]);
        $hands = $this->ProductsHands->Hands->find('list', ['limit' => 200]);
        $this->set(compact('productsHand', 'products', 'hands'));
        $this->set('_serialize', ['productsHand']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Hand id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsHand = $this->ProductsHands->get($id);
        if ($this->ProductsHands->delete($productsHand)) {
            $this->Flash->success(__('The products hand has been deleted.'));
        } else {
            $this->Flash->error(__('The products hand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
