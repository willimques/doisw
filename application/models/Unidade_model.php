<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Unidade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get unidade by IDUnidades
     */
    function get_unidade($IDUnidades)
    {
        return $this->db->get_where('unidade',array('IDUnidades'=>$IDUnidades))->row_array();
    }
    
    /*
     * Get all unidades count
     */
    function get_all_unidades_count()
    {
        $this->db->from('unidade');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all unidades
     */
    function get_all_unidades($params = array())
    {
        $this->db->order_by('IDUnidades', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('unidade')->result_array();
    }
        
    /*
     * function to add new unidade
     */
    function add_unidade($params)
    {
        $this->db->insert('unidade',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update unidade
     */
    function update_unidade($IDUnidades,$params)
    {
        $this->db->where('IDUnidades',$IDUnidades);
        return $this->db->update('unidade',$params);
    }
    
    /*
     * function to delete unidade
     */
    function delete_unidade($IDUnidades)
    {
        return $this->db->delete('unidade',array('IDUnidades'=>$IDUnidades));
    }
}
