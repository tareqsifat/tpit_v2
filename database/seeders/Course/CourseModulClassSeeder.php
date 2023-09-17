<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulClasses;
use Illuminate\Database\Seeder;

class CourseModulClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModulClasses::truncate();
        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>1,
            'class_no' =>  1,
            'title' => 'Bootstrap',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);   

        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>1,
            'class_no' =>  2,
            'title' => 'css',
            'type' => 'recorded',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>1,
            'class_no' =>  3,
            'title' => 'Javascript',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  

        //modulse two class

        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>2,
            'class_no' =>  1,
            'title' => 'class',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);   

        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>2,
            'class_no' =>  2,
            'title' => 'css',
            'type' => 'recorded',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>2,
            'class_no' =>  3,
            'title' => 'array',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
      

        //module theree


        CourseModulClasses::create([
            'course_modules_id' =>3,
            'class_no' =>  1,
            'title' => 'Free Plan',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);   

        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>3,
            'class_no' =>  2,
            'title' => 'Storage',
            'type' => 'live',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
        CourseModulClasses::create([
            'course_id' =>1,
            'course_modules_id' =>3,
            'class_no' =>  3,
            'title' => 'Authentication',
            'type' => 'recorded',
            'class_vedio_link' => 'https://www.youtube.com/watch?v=dbN1rgQQYYE&list=PL9piC5qJFU82ynGtUsNVT2UMLMRLS1Ubl',
            'class_vedio_poster' => 'uplodes/course/graphic.jpg',

        ]);  
      
    }
}
