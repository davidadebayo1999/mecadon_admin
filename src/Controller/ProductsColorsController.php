<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsColors Controller
 *
 * @property \App\Model\Table\ProductsColorsTable $ProductsColors
 */
class ProductsColorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Colors']
        ];
        $productsColors = $this->paginate($this->ProductsColors);

        $this->set(compact('productsColors'));
        $this->set('_serialize', ['productsColors']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Color id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsColor = $this->ProductsColors->get($id, [
            'contain' => ['Products', 'Colors']
        ]);

        $this->set('productsColor', $productsColor);
        $this->set('_serialize', ['productsColor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsColor = $this->ProductsColors->newEntity();
        if ($this->request->is('post')) {
            $productsColor = $this->ProductsColors->patchEntity($productsColor, $this->request->data);
            if ($this->ProductsColors->save($productsColor)) {
                $this->Flash->success(__('The products color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products color could not be saved. Please, try again.'));
        }
        $products = $this->ProductsColors->Products->find('list', ['limit' => 200]);
        $colors = $this->ProductsColors->Colors->find('list', ['limit' => 200]);
        $this->set(compact('productsColor', 'products', 'colors'));
        $this->set('_serialize', ['productsColor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Color id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsColor = $this->ProductsColors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsColor = $this->ProductsColors->patchEntity($productsColor, $this->request->data);
            if ($this->ProductsColors->save($productsColor)) {
                $this->Flash->success(__('The products color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products color could not be saved. Please, try again.'));
        }
        $products = $this->ProductsColors->Products->find('list', ['limit' => 200]);
        $colors = $this->ProductsColors->Colors->find('list', ['limit' => 200]);
        $this->set(compact('productsColor', 'products', 'colors'));
        $this->set('_serialize', ['productsColor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Color id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsColor = $this->ProductsColors->get($id);
        if ($this->ProductsColors->delete($productsColor)) {
            $this->Flash->success(__('The products color has been deleted.'));
        } else {
            $this->Flash->error(__('The products color could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
