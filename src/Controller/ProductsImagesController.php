<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsImages Controller
 *
 * @property \App\Model\Table\ProductsImagesTable $ProductsImages
 */
class ProductsImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Images']
        ];
        $productsImages = $this->paginate($this->ProductsImages);

        $this->set(compact('productsImages'));
        $this->set('_serialize', ['productsImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsImage = $this->ProductsImages->get($id, [
            'contain' => ['Products', 'Images']
        ]);

        $this->set('productsImage', $productsImage);
        $this->set('_serialize', ['productsImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsImage = $this->ProductsImages->newEntity();
        if ($this->request->is('post')) {
            $productsImage = $this->ProductsImages->patchEntity($productsImage, $this->request->data);
            if ($this->ProductsImages->save($productsImage)) {
                $this->Flash->success(__('The products image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products image could not be saved. Please, try again.'));
        }
        $products = $this->ProductsImages->Products->find('list', ['limit' => 200]);
        $images = $this->ProductsImages->Images->find('list', ['limit' => 200]);
        $this->set(compact('productsImage', 'products', 'images'));
        $this->set('_serialize', ['productsImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Image id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsImage = $this->ProductsImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsImage = $this->ProductsImages->patchEntity($productsImage, $this->request->data);
            if ($this->ProductsImages->save($productsImage)) {
                $this->Flash->success(__('The products image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products image could not be saved. Please, try again.'));
        }
        $products = $this->ProductsImages->Products->find('list', ['limit' => 200]);
        $images = $this->ProductsImages->Images->find('list', ['limit' => 200]);
        $this->set(compact('productsImage', 'products', 'images'));
        $this->set('_serialize', ['productsImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsImage = $this->ProductsImages->get($id);
        if ($this->ProductsImages->delete($productsImage)) {
            $this->Flash->success(__('The products image has been deleted.'));
        } else {
            $this->Flash->error(__('The products image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
