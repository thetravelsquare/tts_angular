<?php
class MainModel extends CI_Model
{

    public function insert_data($db_name, $data)
    {
        return $q = $this->db->insert($db_name, $data);
    }
    public function insert_data_get_latest_id($db_name, $data)
    {
        $q = $this->db->insert($db_name, $data);
        $p = $this->db->insert_id();
        return $p;
    }

    public function get_all_data($db_name)
    {
        $q = $this->db->select('*')->get($db_name);
        return $q->result();
    }

    public function get_specific_data($db_id, $id, $db_name)
    {
        $q = $this->db->select('*')->where($db_id, $id)->get($db_name);
        return $q->result();
    }

    public function get_row_data($db_id, $id, $db_name)
    {
        $q = $this->db->select('*')->where($db_id, $id)->get($db_name);
        return $q->row();
    }

    public function edit_data($db_id, $id, $data, $db_name)
    {
        return $q = $this->db->where($db_id, $id)->update($db_name, $data);
    }
    public function getRawUpdate($query)
    {
        $this->db->trans_start();
        $this->db->query($query);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }

    }

    public function edit_data_two($db_id1, $id1, $db_id2, $id2, $data, $db_name)
    {
        return $q = $this->db->where($db_id1, $id1)->where($db_id2, $id2)->update($db_name, $data);
    }

    public function edit_data_mul($db_id, $id, $db_id1, $id1, $db_id2, $id2, $data, $db_name)
    {
        return $q = $this->db->where($db_id, $id)->where($db_id1, $id1)->where($db_id2, $id2)->update($db_name, $data);
    }

    public function delete_data($db_id, $id, $db_name)
    {
        $this->db->where($db_id, $id);
        $this->db->delete($db_name);
    }

    public function delete_data_mul($db_id1, $id1, $db_id2, $id2, $db_name)
    {
        $this->db->where($db_id1, $id1);
        $this->db->where($db_id2, $id2);
        $this->db->delete($db_name);
    }

    public function count_row($db_id, $id, $db_name)
    {
        $this->db->from($db_name)->where($db_id, $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_row_multiple($db_id1, $id1, $db_id2, $id2, $db_name)
    {
        $this->db->from($db_name)->where($db_id1, $id1)->where($db_id2, $id2);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_row_multiple_getUnique($db_id1, $id1, $db_id2, $id2, $db_name, $select)
    {
        $this->db->from($db_name)->where($db_id1, $id1)->where($db_id2, $id2);

        $query = $this->db->distinct()->select($select)->get();
        return $query->num_rows();
    }

    public function count_row_multiple_fourx($db_id1, $id1, $db_id2, $id2, $db_id3, $id3, $db_id4, $id4, $db_name)
    {
        $this->db->from($db_name)->where($db_id1, $id1)->where($db_id2, $id2)->where($db_id3, $id3);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_x($get_id, $db_id, $id, $db_name)
    {
        $q = $this->db->select('*')->where($db_id, $id)->get($db_name);

        return $q->row()->$get_id;

    }
    public function get_xx($get_id, $db_id, $id, $db_id1, $id1, $db_name)
    {
        $q = $this->db->select('*')->where($db_id, $id)->where($db_id1, $id1)->get($db_name);

        return $q->row()->$get_id;

    }

    public function get_unique($db_id, $id, $db_name)
    {
        $this->db->from($db_name)->where($db_id, $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getLatest($fieldneeded, $db, $orderbyid, $wherefield)
    {
        $q = $this->db->query("SELECT " . $fieldneeded . " FROM " . $db . " WHERE " . $wherefield . " ORDER BY " . $orderbyid . " DESC LIMIT 1");
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return false;
        }
    }

    public function getRawRow($query)
    {
        $q = $this->db->query($query);
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return false;
        }
    }
    public function getDealId($id)
    {
        $q = $this->db->query("Select tbl_deal_partner.* , tbl_deal_type.name as deal_type ,
		tbl_currency.name as currency ,partner.name as partner_name
		from tbl_deal_partner,tbl_deal_type,tbl_currency ,partner
		where tbl_deal_partner.id='$id' and tbl_deal_partner.partner_id=partner.id AND partner.deleted_at
		IS NULL AND
		tbl_deal_partner.deal_type_id=tbl_deal_type.id AND tbl_deal_type.deleted_at IS NULL AND
		tbl_deal_partner.currency_id=tbl_currency.id AND tbl_currency.deleted_at IS NULL
		AND tbl_deal_partner.deleted_at IS NULL and tbl_deal_partner.status='approved'");
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return false;
        }
    }
    public function getDealIdAll($id)
    {
        $q = $this->db->query("Select tbl_deal_partner.* , tbl_deal_type.name as deal_type ,
		tbl_currency.name as currency ,partner.name as partner_name
		from tbl_deal_partner,tbl_deal_type,tbl_currency ,partner
		where tbl_deal_partner.id='$id' and tbl_deal_partner.partner_id=partner.id AND partner.deleted_at
		IS NULL AND
		tbl_deal_partner.deal_type_id=tbl_deal_type.id AND tbl_deal_type.deleted_at IS NULL AND
		tbl_deal_partner.currency_id=tbl_currency.id AND tbl_currency.deleted_at IS NULL
		AND tbl_deal_partner.deleted_at IS NULL");
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return false;
        }
    }

    public function getRawResult($query)
    {
        $q = $this->db->query($query);
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }

    public function getAllDeals()
    {
        $q = $this->db->query("Select tbl_deal_partner.* , tbl_deal_type.name as deal_type , tbl_currency.name as currency ,partner.name as partner_name
		from tbl_deal_partner,tbl_deal_type,tbl_currency ,partner
		where tbl_deal_partner.partner_id=partner.id AND partner.deleted_at IS NULL AND tbl_deal_partner.deal_type_id=tbl_deal_type.id AND tbl_deal_type.deleted_at IS NULL AND tbl_deal_partner.currency_id=tbl_currency.id AND tbl_currency.deleted_at IS NULL AND tbl_deal_partner.deleted_at IS NULL and tbl_deal_partner.status='approved'");
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }

	public function getAllDealsByPartner($id)
    {
        $q = $this->db->query("Select tbl_deal_partner.* , tbl_deal_type.name as deal_type , tbl_currency.name as currency ,partner.name as partner_name
		from  tbl_deal_partner,tbl_deal_type,tbl_currency ,partner
		where partner.id='$id' and tbl_deal_partner.partner_id=partner.id AND partner.deleted_at IS NULL AND tbl_deal_partner.deal_type_id=tbl_deal_type.id AND tbl_deal_type.deleted_at IS NULL AND tbl_deal_partner.currency_id=tbl_currency.id AND tbl_currency.deleted_at IS NULL AND tbl_deal_partner.deleted_at IS NULL");
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
//      public function insert_post_image($data){
    //         $insert = $this->db->insert_batch('transporter_document',$data);
    //         return $insert?true:false;
    //     }
    public function insert_batch($table, $data = array())
    {
        $insert = $this->db->insert_batch($table, $data);
        return $insert ? true : false;
    }

    public function likeQuery($keyword)
    {
        $q = $this->db->select('*')->where("maps_address LIKE '%$keyword%'")->get('shops');
        return $q->result();

    }
    public function likeQueryStatus($keyword)
    {
        $q = $this->db->select('*')->where("maps_address LIKE '%$keyword%'")->where('status', 'active')->where('deleted_at', null)->get('shops');
        return $q->result();

    }

}
