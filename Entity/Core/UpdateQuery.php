<?php
    class UpdateQuery extends DbQuery {
        private $_query;

        function __construct($query = "") {
            $this->_query = $query;
        }
    }