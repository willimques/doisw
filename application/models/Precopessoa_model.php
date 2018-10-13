<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Precopessoa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get precopessoa by IDPreco
     */
    function get_precopessoa($IDPreco)
    {
        $this->db->join('preco', 'preco.IDpreco = precopessoa.IDpreco');
        return $this->db->get_where('precopessoa',array('IDPessoa'=>$IDPreco))->row_array();
    }
        
    /*
     * Get all precopessoas
     */
    function get_all_precopessoas()
    {
        $this->db->order_by('IDPreco', 'desc');
        return $this->db->get('precopessoa')->result_array();
    }
        
    /*
     * function to add new precopessoa
     */
    function add_precopessoa($params)
    {
        $this->db->insert('precopessoa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update precopessoa
     */
    function update_precopessoa($IDPreco,$params)
    {
        $this->db->where('IDPessoa',$IDPreco);
        return $this->db->update('precopessoa',$params);
    }
    
    /*
     * function to delete precopessoa
     */
    function delete_precopessoa($IDPreco)
    {
        return $this->db->delete('precopessoa',array('IDPessoa'=>$IDPreco));
    }
}