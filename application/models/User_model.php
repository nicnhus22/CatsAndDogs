  <?php
  class User_model extends CI_Model {

  public $title;
  public $content;
  public $date;

  private $properties = array('email', 'salt', 'password_hash', 'first_name', 'last_name', 'age', 'gender');

  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }

  public function get($id)
  {
    $query = $this->db->get('users', 10);
    return $query->result();
  }

  public function insert($data)
  {
    foreach ($properties as $property) {
      if (isset($data[$property])) {
        $this->{$property} = $data[$property]
      }
    }

    $this->db->insert('users', $this);
  }

  public function update($id, $data)
  {
    foreach ($properties as $property) {
      if (isset($data[$property])) {
        $this->{$property} = $data[$property]
      }
    }

    $this->db->update('users', $this, array('id' => $id));
  }

}