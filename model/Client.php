<?php

    class Client {

        private $id;
        private $doctype;
        private $document;
        private $names;

        public function __construct() {}

        public function get_id(){
            return $this->id;
        }
        public function set_id($id){
            $this->id = $id;
        }

        public function get_doctype(){
            return $this->doctype;
        }
        public function set_doctype($doctype){
            $this->doctype = $doctype;
        }

        public function get_document(){
            return $this->document;
        }

        public function set_document($document){
            $this->document = $document;
        }

        public function get_names(){
            return $this->names;
        }

        public function set_names($names){
            $this->names = $names;
        }
    }

?>