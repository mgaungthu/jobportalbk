<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobVacancy;
use Illuminate\Support\Facades\DB;


class AssistantChiefPeopleOfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobVacancy::create([
            'title' => 'Assistant Chief People Officer',
            'description' => 'Strategic Human Resource Management: Developing and executing a comprehensive human resources strategy aligned with the organization\'s overall goals and objectives...',
            'qualification' => 'Bachelor’s degree in Business or Human Resources from an accredited university. MBA in HRM or MSc in HRM will be an advantage...',
            'salary' => 0
        ]);
    }
}
