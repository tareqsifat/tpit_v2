<?php

namespace Database\Seeders\Course;

use App\Models\Course\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        DB::table('course_course_instructor')->truncate();
        Course::create([
            'title' => 'ওয়েব ডিজাইন এন্ড ডেভেলপম্যান্ট',
            'image' =>'frontend/assets/images/home_page_image/our_course_area/web.png',
            "type" => "online",
            'intro_video' => 'https://www.youtube.com/',
            'what_is_this_course' => 'ওয়েব ডেভেলপম্যান্ট হচ্ছে একটি ওয়েবসাইটের প্রাণ সঞ্চার করা। একজন ওয়েব ডিজাইনার যে ডিজাইন তৈরি করেন, তার প্রতিটি উপকরণকে ফাংশনাল এবং ডায়নামিক করার জন্য পরিচালিত কার্যক্রমই হচ্ছে Web Development',
            'why_is_this_course' => 'ওয়েব ডেভেলপম্যান্ট এর কর্মক্ষেত্র ক্রমবর্ধমান। এটি শেখা অনেক কাজের তুলনায় সহজ এবং শেখার পর রয়েছে অফুরন্ত কাজের সুযোগ। ডিজিটালাইজেশনের যুগে ওয়েবসাইট ছাড়া চিন্তাই করা যায় না। কারণ মানুষ কোনো তথ্যের প্রয়োজনে ঘরে বসে অনলাইনে সার্চ করেই জানতে স্বাচ্ছন্দ্যবোধ করে। যে পরিমাণ ওয়েবসাইট বানানো প্রয়োজন, তাঁর তুলনায় বিশ্বে খুব অল্প সংখ্যকই ওয়েব ডিজাইনার ও ওয়েব ডেভেলপার রয়েছে। ওয়েব ডেভেলপম্যান্ট শিখে আপনি ফ্রিল্যান্স মার্কেটপ্লেসে কাজ করতে পারবেন। বিভিন্ন কোম্পানির ওয়েব ডিজাইন বা ওয়েব ডেভেলপম্যান্ট রিলেটেড ফিক্সড জবও করতে পারবেন।

            ওয়েব ডেভেলপম্যান্ট শিখে আপনি ফ্রিল্যান্স মার্কেটপ্লেসে কাজ করতে পারবেন। বিভিন্ন কোম্পানির ওয়েব ডিজাইন বা ওয়েব ডেভেলপম্যান্ট রিলেটেড ফিক্সড জবও করতে পারবেন।',
        ]);

        Course::create([
            'title' => 'প্রফেশনাল গ্রাফিক্স ডিজাইন',
            'image' =>'frontend/assets/images/home_page_image/our_course_area/grafix.png',
            "type" => "online",
            'intro_video' => 'https://www.youtube.com/',
            'what_is_this_course' => 'ভিজ্যুয়াল কনটেন্টের চাহিদা বেড়ে যাওয়ায় এখন মার্কেটাররা গ্রাফিক্যাল কনটেন্টের দিকে ঝুঁকেছেন। তাই বিশ্বজুড়ে গ্রাফিক ডিজাইনারদের চাহিদা এখন আকাশচুম্বী। এক জরিপে দেখা যায়, ভালো একটা লোগোর জন্য একটি ছোট প্রতিষ্ঠানও ৫০০ ডলার পর্যন্ত খরচ করে। আপনি কি ডিজাইনের কাজ করতে ভালোবাসেন? তাহলে আপডেটেড মডিউলে দক্ষ প্রশিক্ষকের সাথে আমাদের Graphics Design Course-টি আপনার জন্যই।',
            'why_is_this_course' => 'একজন সফল গ্রাফিক ডিজাইনার হতে হলে মানসম্পন্ন কারিকুলামে প্রশিক্ষণের পাশাপাশি প্রজেক্ট ভিত্তিক কাজের অভিজ্ঞতা আর মার্কেটপ্লেস সম্পর্কে ভালো ধারণা থাকা প্রয়োজন । তাই এসব কিছুই একসাথে অন্তর্ভুক্ত করা হয়েছে আমাদের কোর্স মডিউলে। গ্রাফিক ডিজাইন কোর্স থেকে আপনি অ্যাডোবি ফটোশপ আর অ্যাডোবি ইলাস্ট্রেটর ব্যবহার করে যেকোনো বিজ্ঞাপন, ব্যানার, টি-শার্ট ডিজাইন, প্রোডাক্ট ডিজাইন করতে শিখবেন। তাছাড়াও প্রজেক্ট ভিত্তিক কাজের জন্য পাচ্ছেন আধুনিক ল্যাব ব্যবহারের সুযোগ। এভাবে কোর্সটি শেষ করলে, আপনার বাস্তব কাজের অভিজ্ঞতা থাকবে, যা মার্কেটপ্লেসে দ্রুত সফলতা অর্জনে সহায়ক হবে।

            তাই আর দেরি কেনো? গ্রাফিক ডিজাইনের সার্টিফাইড কোর্সে এনরোল করতে আজই বেছে নিন টেক পার্ক আইটির - এর Professional Graphics Design Course।',
        ]);

        Course::create([
            'title' => 'প্রফেশনাল ডিজিটাল মার্কেটিং',
            'image' =>'frontend/assets/images/home_page_image/our_course_area/desital_marketing.png',
            "type" => "online",
            'intro_video' => 'https://www.youtube.com/',
            'what_is_this_course' => 'প্রযুক্তি নির্ভর বিশ্বের ট্রেন্ডিং টপিক এখন ডিজিটাল মার্কেটিং। নিত্য প্রয়োজনীয় পণ্য থেকে শুরু করে গাড়ি-বাড়ি পর্যন্ত, যেকোনো কিছু কিনতে বেশিরভাগ মানুষ এখন ইন্টারনেটের দ্বারস্থ হয়। গুগলের তথ্যমতে, প্রায় ৮৭ শতাংশ মানুষ যেকোনো কিছু কেনার আগে আমাজন বা গুগলে সার্চ করে। তাই ব্যবসায় সাফল্য আনতে বা অনলাইন মার্কেটিং শিখতে এনরোল করুন ডিজিটাল মার্কেটিং কোর্স - এ।',
            'why_is_this_course' => 'একজন দক্ষ ডিজিটাল মার্কেটার হতে হলে আপনাকে ডিজিটাল প্ল্যাটফর্মে পারদর্শী হতে হবে। আর এজন্য যা কিছু জানা প্রয়োজন, তার সবই থাকছে আমাদের কোর্সে। বেসিক কিওয়ার্ড রিসার্চ (Keywords Research) আর কম্পিটিটর অ্যানালাইসিস (Competitor Analysis) থেকে শুরু করে এসইও (SEO), সোশ্যাল মিডিয়া মার্কেটিং (Social Media Marketing), অ্যাফিলিয়েট মার্কেটিং (Affiliate Marketing) এর বিস্তারিত সবই থাকছে আমাদের ডিজিটাল মার্কেটিং কোর্সে। বর্তমানে অসংখ্য ই-কমার্স সাইট রয়েছে ইন্টারনেটে। বিভিন্ন সার্ভিস পেইজের মতো সার্চ ইঞ্জিন র‍্যাংক- এ আনতে সঠিক টেকনিক জানা প্রয়োজন। এজন্য ই-কমার্স এসইও (eCommerce SEO) আর সার্ভিস পেজ এসইও (Service Page SEO) রয়েছে আমাদের কোর্সে। তাই অনলাইনে মার্কেটিং কৌশলে দক্ষতা গড়ে তুলতে আমাদের Digital Marketing Course হতে পারে আপনার সেরা পছন্দ।',
        ]);

        DB::table('course_course_instructor')->insert([
            'instructor_id' => 1,
            'course_id' => 1,
            'batch_id' => 1,
        ]);

        DB::table('course_course_instructor')->insert([
            'instructor_id' => 1,
            'course_id' => 2,
            'batch_id' => 1,
        ]);

        DB::table('course_course_instructor')->insert([
            'instructor_id' => 1,
            'course_id' => 3,
            'batch_id' => 1,
        ]);
    }
}
