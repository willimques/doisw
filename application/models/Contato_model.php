<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Contato_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /*
     * Get contato by IDContato
     */
    function get_contato($IDPessoa)
    {
        return $this->db->get_where('contato',array('IDPessoa'=>$IDPessoa))->row_array();
    }
        
    /*
     * Get all contatos
     */
    function get_all_contatos()
    {
        $this->db->order_by('IDContato', 'desc');
        return $this->db->get('contato')->result_array();
    }
        
    /*
     * function to add new contato
     */
    function add_contato($params)
    {
        $this->db->insert('contato',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update contato
     */
    function update_contato($IDContato,$params)
    {
        $this->db->where('IDPessoa',$IDContato);
        return $this->db->update('contato',$params);
    }
    
    /*
     * function to delete contato
     */
    function delete_contato($IDContato)
    {
        return $this->db->delete('contato',array('IDPessoa'=>$IDContato));
    }
}
