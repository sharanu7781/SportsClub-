<?php

namespace App\Models;

use CodeIgniter\Model;

class AcademyModel extends Model {
    protected $table = 'academies';
    protected $primaryKey = 'id';
    protected $allowedFields = ['academy_name', 'location', 'weekday_morning_price', 'weekday_happy_hours_price', 'weekday_evening_price', 'weekend_morning_price', 'weekend_happy_hours_price', 'weekend_evening_price'];

    public function addAcademy($data) {
        // Insert academy details into database
        $this->db->transStart(); // Start transaction
        $this->insert($data);

        $academy_id = $this->db->insertID(); // Get the ID of the inserted academy
        
        // Insert court types into the database
        foreach ($data['court_types'] as $court_type) {
            $this->db->table('court_types')->insert([
                'academy_id' => $academy_id,
                'court_type' => $court_type
            ]);
        }

        $this->db->transComplete(); // End transaction

        return $this->db->transStatus(); // Return transaction status
    }

    // Add other methods as needed
}
?>
