<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

    public function index() {
        $this->call->view('student/index');
    }

    public function profile() {
        // Your $data['student'] array is defined here inside profile()
        $data['student'] = [
            // Core Academic Information
            'student_id'        => '2026-0001',
            'name'              => 'Zhann Cyprus Kylle R. Mañibo',
            'profile_pic'       => 'profile.jpg',
            'course'            => 'BS Information Technology',
            'year'              => '3rd Year',
            'section'           => '3F-5',
            'academic_status'   => 'Regular',
            
            // Personal & Contact Details
            'email'             => 'zhannmanibo@gmail.com',
            'contact_no'        => '09350039298',
            'address'           => 'Mahal Na Pangalan Calapan City ',
            'birthdate'         => '2006-05-20',
            'gender'            => 'Male ',
            
            // Additional Academic Details
            'department'        => 'College of Computer Studies',
            'adviser'           => 'Ronald Marasigan',
            'gpa'               => 'N/A',
            
            // Skills & Interests
            'skills'            => 'PHP, LavaLust Framework, HTML/CSS, JavaScript, MySQL',
            'hobbies'           => 'Gaming, Watching Netflix, Do simple task',
            
            // Emergency Contact
            'emergency_contact' => 'Margie Jane R. Mañibo (Mother)',
            'emergency_no'      => '+63 998 765 4321',

            // Online Links
            'github'            => 'https://github.com/zhannmanibo-star',
            
        ];

        // Loads the profile view and passes the $data array to it
        $this->call->view('student/profile', $data);
    }
}