  <?php
  class User_model extends CI_Model {

  public $title;
  public $content;
  public $date;

  private $table = 'users';
  private $properties = array('email', 'salt', 'password_hash', 'first_name', 'last_name', 'age', 'gender');

  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }

  public function auth($email, $password) {
    $user = $this->db->where('email', $email)
        ->order_by("id", "ASC")
        ->limit(1)
        ->get($this->table)
        ->row();

    if (!$user) {
      return false;
    }
    $password_hash = hash('sha256', $user->salt . $password);
    return $user->password_hash == $password_hash ? $user : FALSE;
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
        $this->{$property} = $data[$property];
      }
    }

    if (empty($this->salt)) {
      $this->salt = str_random(15);
    }
    $this->password_hash = hash('sha256', $user->salt . $this->password);

    $this->db->insert('users', $this);
  }

  public function update($id, $data)
  {
    foreach ($properties as $property) {
      if (isset($data[$property])) {
        $this->{$property} = $data[$property];
      }
    }

    $this->db->update('users', $this, array('id' => $id));
  }

}