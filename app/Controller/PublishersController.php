<?php
/**
 * @property Publisher $Publisher.php
 */

class PublishersController extends AppController{
    var $name = 'Publishers';

    var $layout = 'Tran_layout';

    function index(){
        $query = $this->Publisher->find('all', array('order' => 'company_name ASC'));

        $this->set('Pubs', $query);


        $this->set('title_for_layout', "Publisher HomePage");
    }

    function view($id = NULL, $company = NULL){
        $this->Publisher->company_name = $company;
        $viewQuery = $this->Publisher->read(null, $id);

        $this->set('singlePub', $viewQuery);
        $this->set('title_for_layout', $company);

    }

    function create(){
        $this->set('title_for_layout', "Create a publisher");
        // check if the form is not empty then save data

        if(!empty($this->data)){
            if($this->Publisher->save($this->data)){
                $this->Session->setFlash("The Publisher.php has been successfully created!");
                $this->redirect(array('action' => 'index'));

            }
            else{
                $this->Session->setFlash("The Publisher.php could not be saved!");
            }
        }

    }
    function edit($id = NULL){
        $this->set('title_for_layout', "Edit Publisher");
        if (empty($this->data)){
            $this->data = $this->Publisher->read(NULL, $id);
        }
        else{
            if($this->Publisher->save($this->data)){
                $this->Session->setFlash('The Publisher.php has been successfully edited!');
                $this->redirect(array('action' => 'index'));
            }
            else{
                $this->Session->setFlash("The Publisher.php could not be edited!");
            }
        }
    }
    function delete($id = NULL, $companyName = NULL){
        $this->Publisher->id = $id;
        $this->Publisher->company_name = $companyName;
        $this->Session->setFlash('Company '.$companyName.' has been deleted.');
        $this->Publisher->delete($id);
        $this->redirect(array('action' => 'index'));
    }
}
?>