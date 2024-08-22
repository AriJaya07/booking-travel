<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller{
    //Method __construct() merupakan sebuah konstruktor. 
    //Method ini yang akan dieksekusi pertama kali saat Controller diakses.
    public function __construct(){
        parent:: __construct();

        $this -> load -> library('curl');
        $this -> load -> library('appsetting');
        $this->load->library("appmodul");
    }

    public function index(){
        //$data["company"] = $this -> company_model -> getAll();
        $this -> load -> view("user/group_view");
    }

    public function showForm(){
        $root = $this->appsetting->API_ROOT;
        /* API URL */
        $url = $root.'users/listgroup';
        $jwt = '';

        $params = array(
            'group_id' => $this->input->get('id')
        );

        $url = $url . '?' . http_build_query($params); 
        $data = json_decode($this -> curl -> get($url, $jwt), true);
        
        foreach($data["data"] as $list){
            $data = array(
                'id' => $list["id"],
                'group' => $list["group"],
                'desc' => $list["desc"],
            );
        }

        echo json_encode($data);
    }

    function getData() {
        $root = $this->appsetting->API_ROOT;
        /* API URL */
        $url = $root.'users/listgroup';
        $jwt = '';

        $params = array(
            'is_aktif' => "1"
        );
        $url = $url . '?' . http_build_query($params); 
        $data = json_decode($this -> curl -> get($url, $jwt), true);
        // var_dump($data);
        //     die();

        // $data = $this -> company_model -> getAll();
        $html = "";

        foreach($data["data"] as $list){
            $html .= '<tr>'.
                        '<td>'. $list["group"] .'</td>'.
                        '<td>'. $list["desc"] .'</td>'.
                        '<td><a class="clickpriv" data-for="viewpriv" data-id="'. $list["id"] .'">Click For Detail</a></td>'.
                        '<td style="text-align:right;">'.
                            '<button class="btn btn-info btn-xs group_edit" data-for="viewgroup" data-id="'. $list["id"] .'">'.
                                '<i class="fa fa-edit"></i> Edit'.
                            '</button>&nbsp;'.
                            '<button class="btn btn-danger btn-xs group_hapus" data-for="viewgroup" data-id="'. $list["id"] .'">'.
                                '<i class="fa fa-trash"></i> Delete'.
                            '</button>'.
                        '</td>'.
                    '</tr>';
                    // echo $html;
                    // die();    
        }

        echo json_encode($html);
    }

    function getPriv(){
        $appmodul = $this->appmodul;
        $root = $this->appsetting->API_ROOT;
        /* API URL */
        $url = $root.'users/listpriv';
        $jwt = '';

        $params = array(
            'group_id' => $this->input->get('group_id')
        );
        $url = $url . '?' . http_build_query($params); 
        $data = json_decode($this -> curl -> get($url, $jwt), true);
        // var_dump($data);
        //     die();

        $html = "";

        foreach($data["data"] as $list){
            $titCode = "";
            $splitCode = explode(';', $list["code_act"]);
            
            for($i=0; $i < count($splitCode); $i++){
                
                if($splitCode[$i] != ""){
                    $titCode .= "| <a>". $appmodul->titleAct[$splitCode[$i]]. "</a> | ";
                }
            }
            // var_dump($titCode);
            // die();
            $html .= '<tr>'.
                        '<td>'. $appmodul->titleM1[$list["m1"]] .'</td>'.
                        '<td>'. $appmodul->titleM2[$list["m1"]][$list["m2"]] .'</td>'.
                        '<td>'. $appmodul->titleObj[$list["m1"]][$list["m2"]][$list["obj"]] .'</td>'.
                        '<td>'. $titCode .'</td>'.
                        '<td style="text-align:right;">'.
                            '<button class="btn btn-danger btn-xs priv_hapus" data-for="viewpriv" data-id="'. $list["id"] .'">'.
                                '<i class="fa fa-trash"></i> Delete'.
                            '</button>'.
                        '</td>'.
                    '</tr>';
                    // echo $html;
                    // die();    
        }

        echo json_encode($html);
    }

    public function save(){
        $data = "";
        $root = $this->appsetting->API_ROOT;
        $id = $this -> input -> post("id");

        if($id !=0 && $id != null){
            /* API URL */
            $url = $root.'users/updategroup';

            $data = array(
                "id" => $this->input->post('id'),
                "group" => $this->input->post('group'),
                "desc" => $this->input->post('desc')
            );
            //$data = $company -> save();
            $result = $this -> curl -> post($url, $data);
        } else {
            /* API URL */
            $url = $root.'users/add_user_group';

            $data = array(
                "group" => $this->input->post('group'),
                "desc" => $this->input->post('desc'),
                "is_aktif" => "1"
            );
            //$data = $company -> save();
            $result = $this -> curl -> post($url, $data);

           // var_dump(json_encode($result));
        }
        
        echo json_encode($result);
    }

    public function delete(){
        $root = $this->appsetting->API_ROOT;
        $datafor = $this->input->post('datafor');

        if($datafor == "viewpriv"){
            /* API URL */
            $url = $root.'users/delpriv';

            $data = array(
                "id" => $this->input->post('id')
            );
            //$data = $company -> save();
            $result = $this -> curl -> post($url, $data);
        } else if($datafor == "viewgroup"){
            /* API URL */
            $url = $root.'users/delgroup';

            $data = array(
                "id" => $this->input->post('id')
            );
            //$data = $company -> save();
            $result = $this -> curl -> post($url, $data);
        }

        echo json_encode($result);    
    }

    public function listM2(){
        $appmodul = $this->appmodul;
        $m1 = $this->input->get('m1');
        //echo $this->input->get('parentId');
        // echo count($appmodul->titleM2[$m1]);
        // die();
        $lists="";

        for($i=0; $i < count($appmodul->titleM2[$m1]); $i++){
            $lists .= "<option value='". $appmodul->valM2[$m1][$i] ."'>". $appmodul->titleM2[$m1][$i] ."</option>";
        }

        echo json_encode($lists);
    }

    public function listObj(){
        $appmodul = $this->appmodul;
        $m1 = $this->input->get('m1');
        $m2 = $this->input->get('m2');
        //echo $this->input->get('parentId');
        // echo count($appmodul->titleM2[$m1]);
        // die();
        $lists="";

        for($i=0; $i < count($appmodul->titleObj[$m1][$m2]); $i++){
            $lists .= "<option value='". $appmodul->valObj[$m1][$m2][$i] ."'>". $appmodul->titleObj[$m1][$m2][$i] ."</option>";
        }

        echo json_encode($lists);
    }

    public function savePriv(){
        $appmodul = $this->appmodul;
        $data = "";

        $id = $this -> input -> post("id");

        if($id !=0 && $id != null){
           // $data = $company -> update();
        } else {
            $root = $this->appsetting->API_ROOT;
            /* API URL */
            $url = $root.'users/add_user_priv';

            $code_act = "";
            for($i=0; $i < count($appmodul->valAct); $i++){
                // if($i==0){
                //     $code_act .= $this->input->post('cAct-'.$i);
                // } else {
                    if($this->input->post('cAct-'.$i) !== null){
                        $code_act .= $this->input->post('cAct-'.$i). ";";
                    }
                    
                // }
            }

            $data = array(
                "m1" => $this->input->post('m1'),
                "m2" => $this->input->post('m2'),
                "obj" => $this->input->post('obj'),
                "code_act" => $code_act,
                "user_group_id" => $this->input->post('id_group')
            );
            //$data = $company -> save();
            $result = $this -> curl -> post($url, $data);

           // var_dump(json_encode($result));
        }
        
        echo json_encode($result);
    }

}
?>