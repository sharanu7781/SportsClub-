<?php

namespace App\Controllers;

use App\Models\AcademyModel;

class AcademyController extends BaseController {
  
    public function addAcademy() {
        if ($this->request->getMethod() === 'post') {
            // Check if form is submitted
            if ($this->request->getPost('submit')) {
                // Retrieve form data
                $data = [
                    'academy_name' => $this->request->getPost('academy_name'),
                    'location' => $this->request->getPost('location'),
                    'weekday_morning_price' => $this->request->getPost('weekday_morning_price'),
                    'weekday_happy_hours_price' => $this->request->getPost('weekday_happy_hours_price'),
                    'weekday_evening_price' => $this->request->getPost('weekday_evening_price'),
                    'weekend_morning_price' => $this->request->getPost('weekend_morning_price'),
                    'weekend_happy_hours_price' => $this->request->getPost('weekend_happy_hours_price'),
                    'weekend_evening_price' => $this->request->getPost('weekend_evening_price'),
                    'court_types' => $this->request->getPost('court_type')
                ];

                // Create an instance of the model
                $model = new AcademyModel();

                // Call the method to add academy to the database
                $result = $model->addAcademy($data);

                if ($result) {
                    // Data inserted successfully
                    return redirect()->to(base_url('ground'))->with('success', 'Data saved successfully.');
                } else {
                    // Error occurred
                    echo "Failed to add academy.";
                }
            }
        }
        // If the request method is not POST or form is not submitted, simply return to previous page
        return redirect()->back();
    }
}
?>
