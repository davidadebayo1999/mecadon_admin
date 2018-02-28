<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsBrands Controller
 *
 * @property \App\Model\Table\ProductsBrandsTable $ProductsBrands
 */
class ProductsBrandsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Brands']
        ];
        $productsBrands = $this->paginate($this->ProductsBrands);

        $this->set(compact('productsBrands'));
        $this->set('_serialize', ['productsBrands']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Brand id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsBrand = $this->ProductsBrands->get($id, [
            'contain' => ['Products', 'Brands']
        ]);

        $this->set('productsBrand', $productsBrand);
        $this->set('_serialize', ['productsBrand']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsBrand = $this->ProductsBrands->newEntity();
        if ($this->request->is('post')) {
            $productsBrand = $this->ProductsBrands->patchEntity($productsBrand, $this->request->data);
            if ($this->ProductsBrands->save($productsBrand)) {
                $this->Flash->success(__('The products brand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products brand could not be saved. Please, try again.'));
        }
        $products = $this->ProductsBrands->Products->find('list', ['limit' => 200]);
        $brands = $this->ProductsBrands->Brands->find('list', ['limit' => 200]);
        $this->set(compact('productsBrand', 'products', 'brands'));
        $this->set('_serialize', ['productsBrand']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Brand id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsBrand = $this->ProductsBrands->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsBrand = $this->ProductsBrands->patchEntity($productsBrand, $this->request->data);
            if ($this->ProductsBrands->save($productsBrand)) {
                $this->Flash->success(__('The products brand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products brand could not be saved. Please, try again.'));
        }
        $products = $this->ProductsBrands->Products->find('list', ['limit' => 200]);
        $brands = $this->ProductsBrands->Brands->find('list', ['limit' => 200]);
        $this->set(compact('productsBrand', 'products', 'brands'));
        $this->set('_serialize', ['productsBrand']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Brand id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsBrand = $this->ProductsBrands->get($id);
        if ($this->ProductsBrands->delete($productsBrand)) {
            $this->Flash->success(__('The products brand has been deleted.'));
        } else {
            $this->Flash->error(__('The products brand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
