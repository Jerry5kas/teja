<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $realEstateId = Category::where('name', 'Real Estate')->value('id');
        $hrId = Category::where('name', 'HR Consultancy')->value('id');
        $loanId = Category::where('name', 'Loans')->value('id');

        $products = [
            // Real Estate
            ['Luxury Apartment', 'Spacious 3BHK apartment in downtown.', 9500000, 5, 'realestate1.jpg', $realEstateId],
            ['Beach Villa', 'Sea-facing 5BHK villa with private pool.', 18000000, 10, 'realestate2.jpg', $realEstateId],
            ['Studio Flat', 'Compact and affordable studio flat.', 3500000, 8, 'realestate3.jpg', $realEstateId],
            ['Farmhouse', 'Green farmhouse ideal for weekend getaways.', 7200000, 7, 'realestate4.jpg', $realEstateId],
            ['Penthouse', 'Top-floor penthouse with skyline view.', 15500000, 12, 'realestate5.jpg', $realEstateId],
            ['Suburban House', 'Family-friendly house in suburbs.', 4800000, 6, 'realestate6.jpg', $realEstateId],
            ['Commercial Space', 'Office space in business district.', 12500000, 9, 'realestate7.jpg', $realEstateId],
            ['Warehouse', 'Large warehouse with loading dock.', 8000000, 11, 'realestate8.jpg', $realEstateId],
            ['Plot Land', 'Residential plot in developing area.', 2200000, 4, 'realestate9.jpg', $realEstateId],
            ['Luxury Condo', 'Modern condo with smart amenities.', 10200000, 6, 'realestate10.jpg', $realEstateId],

            // HR Consultancy
            ['Resume Building Service', 'Professional resume writing.', 1500, 5, 'hr1.jpg', $hrId],
            ['Interview Coaching', '1-on-1 session with industry experts.', 2500, 10, 'hr2.jpg', $hrId],
            ['LinkedIn Optimization', 'Boost your LinkedIn profile.', 1800, 8, 'hr3.jpg', $hrId],
            ['Recruitment Package', 'End-to-end hiring support.', 12000, 15, 'hr4.jpg', $hrId],
            ['Career Counseling', 'Get expert career guidance.', 2000, 5, 'hr5.jpg', $hrId],
            ['Skill Assessment', 'Evaluate your current skill set.', 1000, 4, 'hr6.jpg', $hrId],
            ['HR Compliance Kit', 'Templates and guidelines for HR policies.', 3200, 6, 'hr7.jpg', $hrId],
            ['Employee Handbook Service', 'Custom employee handbooks.', 2800, 7, 'hr8.jpg', $hrId],
            ['Psychometric Testing', 'Behavioral and personality tests.', 2200, 9, 'hr9.jpg', $hrId],
            ['Freelancer Connect', 'HR support for freelancers.', 3000, 5, 'hr10.jpg', $hrId],

            // Loans
            ['Home Loan', 'Low-interest housing loan.', 1000000, 2, 'loan1.jpg', $loanId],
            ['Education Loan', 'Loan for higher studies.', 500000, 3, 'loan2.jpg', $loanId],
            ['Personal Loan', 'Instant approval with low documents.', 250000, 4, 'loan3.jpg', $loanId],
            ['Car Loan', 'Finance for new or used cars.', 600000, 5, 'loan4.jpg', $loanId],
            ['Business Loan', 'Flexible loans for SMEs.', 1200000, 6, 'loan5.jpg', $loanId],
            ['Gold Loan', 'Loan against gold with minimal interest.', 400000, 3, 'loan6.jpg', $loanId],
            ['Medical Loan', 'For emergency medical needs.', 300000, 4, 'loan7.jpg', $loanId],
            ['Travel Loan', 'Finance your dream vacations.', 350000, 6, 'loan8.jpg', $loanId],
            ['Debt Consolidation Loan', 'Combine multiple debts into one.', 800000, 7, 'loan9.jpg', $loanId],
            ['Student Loan', 'Student-friendly repayment plans.', 450000, 2, 'loan10.jpg', $loanId],
        ];

        foreach ($products as [$name, $desc, $price, $discount, $image, $catId]) {
            Product::create([
                'name' => $name,
                'description' => $desc,
                'price' => $price,
                'discount' => $discount,
                'image' => $image, // Ensure these images exist in `storage/app/public`
                'category_id' => $catId,
            ]);
        }
    }
}
