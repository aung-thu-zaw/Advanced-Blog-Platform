<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = collect([
            // First Category
            [
                'name' => 'Health & Wellness',
                'description' => 'Explore topics related to physical and mental health, fitness, nutrition, self-care practices, and overall well-being.',
            ],
            [
                'name' => 'Technology & Innovation',
                'description' => 'Discuss advancements in technology, emerging trends, software development, gadgets, and the impact of technology on society.',
            ],
            [
                'name' => 'Travel & Adventure',
                'description' => 'Share experiences, tips, and guides for exploring new destinations, outdoor activities, adventure travel, and cultural immersion.',
            ],
            [
                'name' => 'Personal Finance & Money Management',
                'description' => 'Provide advice on budgeting, saving, investing, financial planning, debt management, and achieving financial goals.',
            ],
            [
                'name' => 'Education & Learning',
                'description' => 'Discuss educational resources, learning techniques, online courses, academic insights, and lifelong learning opportunities.',
            ],
            [
                'name' => 'Arts & Creativity',
                'description' => 'Explore various forms of art, creativity, design, photography, writing, music, and other artistic endeavors.',
            ],
            [
                'name' => 'Parenting & Family',
                'description' => 'Offer guidance and support for parenting, family dynamics, child development, raising children, and maintaining healthy family relationships.',
            ],
            [
                'name' => 'Food & Cooking',
                'description' => 'Share recipes, cooking tips, culinary techniques, dietary preferences, nutrition information, and food-related experiences.',
            ],
            [
                'name' => 'Environment & Sustainability',
                'description' => 'Address environmental issues, sustainable living practices, conservation efforts, eco-friendly initiatives, and climate change awareness.',
            ],
            [
                'name' => 'Relationships & Dating',
                'description' => 'Discuss relationship advice, communication skills, love, romance, dating tips, marriage, and navigating interpersonal connections.',
            ],

            // Second Category
            [
                'parent_id' => 1,
                'name' => 'Fitness & Exercise',
                'description' => '',
            ],

            [
                'parent_id' => 1,
                'name' => 'Nutrition & Diet',
                'description' => '',
            ],

            [
                'parent_id' => 1,
                'name' => 'Mental Health',
                'description' => '',
            ],

            [
                'parent_id' => 2,
                'name' => 'Programming & Development',
                'description' => '',
            ],

            [
                'parent_id' => 2,
                'name' => 'Tech News & Reviews',
                'description' => '',
            ],

            [
                'parent_id' => 2,
                'name' => 'Digital Marketing',
                'description' => '',
            ],

            [
                'parent_id' => 3,
                'name' => 'Destination Guides',
                'description' => '',
            ],

            [
                'parent_id' => 3,
                'name' => 'Outdoor Activities',
                'description' => '',
            ],

            [
                'parent_id' => 3,
                'name' => 'Cultural Experiences',
                'description' => '',
            ],

            [
                'parent_id' => 4,
                'name' => 'Budgeting & Saving',
                'description' => '',
            ],

            [
                'parent_id' => 4,
                'name' => 'Investing & Wealth Building',
                'description' => '',
            ],

            [
                'parent_id' => 4,
                'name' => 'Debt Management',
                'description' => '',
            ],

            [
                'parent_id' => 5,
                'name' => 'Study Tips & Techniques',
                'description' => '',
            ],

            [
                'parent_id' => 5,
                'name' => 'Career Development',
                'description' => '',
            ],

            [
                'parent_id' => 5,
                'name' => 'Online Learning Resources',
                'description' => '',
            ],

            [
                'parent_id' => 6,
                'name' => 'Visual Arts',
                'description' => '',
            ],

            [
                'parent_id' => 6,
                'name' => 'Crafts & DIY Projects',
                'description' => '',
            ],

            [
                'parent_id' => 6,
                'name' => 'Creative Writing',
                'description' => '',
            ],

            [
                'parent_id' => 7,
                'name' => 'Pregnancy & Childbirth',
                'description' => '',
            ],

            [
                'parent_id' => 7,
                'name' => 'Parenting Tips & Advice',
                'description' => '',
            ],

            [
                'parent_id' => 7,
                'name' => 'Family Relationships',
                'description' => '',
            ],

            [
                'parent_id' => 8,
                'name' => 'Cuisine & Recipes',
                'description' => '',
            ],

            [
                'parent_id' => 8,
                'name' => 'Cooking Techniques',
                'description' => '',
            ],

            [
                'parent_id' => 8,
                'name' => 'Food Culture & History',
                'description' => '',
            ],

            [
                'parent_id' => 9,
                'name' => 'Green Living Tips',
                'description' => '',
            ],

            [
                'parent_id' => 9,
                'name' => 'Climate Change Awareness',
                'description' => '',
            ],

            [
                'parent_id' => 9,
                'name' => 'Community Engagement',
                'description' => '',
            ],

            [
                'parent_id' => 10,
                'name' => 'Dating Advice & Tips',
                'description' => '',
            ],

            [
                'parent_id' => 10,
                'name' => 'Marriage & Partnership',
                'description' => '',
            ],

            [
                'parent_id' => 10,
                'name' => 'Breakups & Divorce',
                'description' => '',
            ],

            // Third Category

            [
                'parent_id' => 11,
                'name' => 'Workout Routines',
                'description' => '',
            ],

            [
                'parent_id' => 11,
                'name' => 'Exercise Tips',
                'description' => '',
            ],

            [
                'parent_id' => 11,
                'name' => 'Fitness Challenges',
                'description' => '',
            ],

            [
                'parent_id' => 12,
                'name' => 'Healthy Recipes',
                'description' => '',
            ],

            [
                'parent_id' => 12,
                'name' => 'Meal Planning',
                'description' => '',
            ],

            [
                'parent_id' => 12,
                'name' => 'Nutritional Advice',
                'description' => '',
            ],

            [
                'parent_id' => 13,
                'name' => 'Stress Management',
                'description' => '',
            ],

            [
                'parent_id' => 13,
                'name' => 'Anxiety Relief',
                'description' => '',
            ],

            [
                'parent_id' => 13,
                'name' => 'Self-Care Practices',
                'description' => '',
            ],

            [
                'parent_id' => 14,
                'name' => 'Coding Tutorials',
                'description' => '',
            ],

            [
                'parent_id' => 14,
                'name' => 'Web Development Tips',
                'description' => '',
            ],

            [
                'parent_id' => 14,
                'name' => 'Programming Languages',
                'description' => '',
            ],

            [
                'parent_id' => 15,
                'name' => 'Latest Gadgets',
                'description' => '',
            ],

            [
                'parent_id' => 15,
                'name' => 'Software Reviews',
                'description' => '',
            ],

            [
                'parent_id' => 15,
                'name' => 'Tech Trends',
                'description' => '',
            ],

            [
                'parent_id' => 16,
                'name' => 'SEO Strategies',
                'description' => '',
            ],

            [
                'parent_id' => 16,
                'name' => 'Social Media Marketing',
                'description' => '',
            ],

            [
                'parent_id' => 16,
                'name' => 'Content Creation Tips',
                'description' => '',
            ],

            [
                'parent_id' => 17,
                'name' => 'City Breaks',
                'description' => '',
            ],

            [
                'parent_id' => 17,
                'name' => 'Off-the-Beaten-Path Locations',
                'description' => '',
            ],

            [
                'parent_id' => 17,
                'name' => 'Travel Tips',
                'description' => '',
            ],

            [
                'parent_id' => 18,
                'name' => 'Hiking Trails',
                'description' => '',
            ],

            [
                'parent_id' => 18,
                'name' => 'Camping Tips',
                'description' => '',
            ],

            [
                'parent_id' => 18,
                'name' => 'Adventure Sports',
                'description' => '',
            ],

            [
                'parent_id' => 19,
                'name' => 'Local Cuisine',
                'description' => '',
            ],

            [
                'parent_id' => 19,
                'name' => 'Festivals & Events',
                'description' => '',
            ],

            [
                'parent_id' => 19,
                'name' => 'Cultural Immersion',
                'description' => '',
            ],

            [
                'parent_id' => 20,
                'name' => 'Budgeting Techniques',
                'description' => '',
            ],

            [
                'parent_id' => 20,
                'name' => 'Saving Strategies',
                'description' => '',
            ],

            [
                'parent_id' => 20,
                'name' => 'Frugal Living Tips',
                'description' => '',
            ],

            [
                'parent_id' => 21,
                'name' => 'Investment Strategies',
                'description' => '',
            ],

            [
                'parent_id' => 21,
                'name' => 'Stock Market Insights',
                'description' => '',
            ],

            [
                'parent_id' => 21,
                'name' => 'Retirement Planning',
                'description' => '',
            ],

            [
                'parent_id' => 22,
                'name' => 'Paying Off Debt',
                'description' => '',
            ],

            [
                'parent_id' => 22,
                'name' => 'Credit Score Improvement',
                'description' => '',
            ],

            [
                'parent_id' => 22,
                'name' => 'Debt Consolidation Options',
                'description' => '',
            ],

            [
                'parent_id' => 23,
                'name' => 'Effective Study Habits',
                'description' => '',
            ],

            [
                'parent_id' => 23,
                'name' => 'Exam Preparation',
                'description' => '',
            ],

            [
                'parent_id' => 23,
                'name' => 'Time Management Skills',
                'description' => '',
            ],

            [
                'parent_id' => 24,
                'name' => 'Job Search Strategies',
                'description' => '',
            ],

            [
                'parent_id' => 24,
                'name' => 'Resume Writing Tips',
                'description' => '',
            ],

            [
                'parent_id' => 24,
                'name' => 'Interview Preparation',
                'description' => '',
            ],

            [
                'parent_id' => 25,
                'name' => 'Online Courses Reviews',
                'description' => '',
            ],

            [
                'parent_id' => 25,
                'name' => 'Learning Platforms Comparison',
                'description' => '',
            ],

            [
                'parent_id' => 25,
                'name' => 'Skill Development Guides',
                'description' => '',
            ],

            [
                'parent_id' => 26,
                'name' => 'Painting Techniques',
                'description' => '',
            ],

            [
                'parent_id' => 26,
                'name' => 'Photography Tips',
                'description' => '',
            ],

            [
                'parent_id' => 26,
                'name' => 'Drawing Tutorials',
                'description' => '',
            ],

            [
                'parent_id' => 27,
                'name' => 'Home Decor Ideas',
                'description' => '',
            ],

            [
                'parent_id' => 27,
                'name' => 'DIY Gifts',
                'description' => '',
            ],

            [
                'parent_id' => 27,
                'name' => 'Craft Projects for Kids',
                'description' => '',
            ],

            [
                'parent_id' => 28,
                'name' => 'Writing Prompts',
                'description' => '',
            ],

            [
                'parent_id' => 28,
                'name' => 'Fiction Writing Tips',
                'description' => '',
            ],

            [
                'parent_id' => 28,
                'name' => 'Poetry Workshops',
                'description' => '',
            ],

            [
                'parent_id' => 29,
                'name' => 'Prenatal Care',
                'description' => '',
            ],

            [
                'parent_id' => 29,
                'name' => 'Childbirth Preparation',
                'description' => '',
            ],

            [
                'parent_id' => 29,
                'name' => 'Newborn Care',
                'description' => '',
            ],

            [
                'parent_id' => 30,
                'name' => 'Positive Discipline Techniques',
                'description' => '',
            ],

            [
                'parent_id' => 30,
                'name' => 'Parenting Hacks',
                'description' => '',
            ],

            [
                'parent_id' => 30,
                'name' => 'Family Bonding Activities',
                'description' => '',
            ],

            [
                'parent_id' => 31,
                'name' => 'Marriage Advice',
                'description' => '',
            ],

            [
                'parent_id' => 31,
                'name' => 'Sibling Dynamics',
                'description' => '',
            ],

            [
                'parent_id' => 31,
                'name' => 'Building Stronger Family Bonds',
                'description' => '',
            ],

            [
                'parent_id' => 32,
                'name' => 'International Cuisine',
                'description' => '',
            ],

            [
                'parent_id' => 32,
                'name' => 'Quick & Easy Recipes',
                'description' => '',
            ],

            [
                'parent_id' => 32,
                'name' => 'Cooking for Special Diets',
                'description' => '',
            ],

            [
                'parent_id' => 33,
                'name' => 'Knife Skills',
                'description' => '',
            ],

            [
                'parent_id' => 33,
                'name' => 'Cooking Methods',
                'description' => '',
            ],

            [
                'parent_id' => 33,
                'name' => 'Food Presentation Tips',
                'description' => '',
            ],

            [
                'parent_id' => 34,
                'name' => 'Food Traditions',
                'description' => '',
            ],

            [
                'parent_id' => 34,
                'name' => 'Culinary Destinations',
                'description' => '',
            ],

            [
                'parent_id' => 34,
                'name' => 'Food Festivals',
                'description' => '',
            ],

            [
                'parent_id' => 35,
                'name' => 'Eco-Friendly Products',
                'description' => '',
            ],

            [
                'parent_id' => 35,
                'name' => 'Sustainable Lifestyle Choices',
                'description' => '',
            ],

            [
                'parent_id' => 35,
                'name' => 'Zero Waste Living',
                'description' => '',
            ],

            [
                'parent_id' => 36,
                'name' => 'Environmental Issues',
                'description' => '',
            ],

            [
                'parent_id' => 36,
                'name' => 'Conservation Efforts',
                'description' => '',
            ],

            [
                'parent_id' => 36,
                'name' => 'Renewable Energy Solutions',
                'description' => '',
            ],

            [
                'parent_id' => 37,
                'name' => 'Volunteer Opportunities',
                'description' => '',
            ],

            [
                'parent_id' => 37,
                'name' => 'Community Gardens',
                'description' => '',
            ],

            [
                'parent_id' => 37,
                'name' => 'Environmental Activism',
                'description' => '',
            ],

            [
                'parent_id' => 38,
                'name' => 'Online Dating Tips',
                'description' => '',
            ],

            [
                'parent_id' => 38,
                'name' => 'First Date Ideas',
                'description' => '',
            ],

            [
                'parent_id' => 38,
                'name' => 'Relationship Red Flags',
                'description' => '',
            ],

            [
                'parent_id' => 39,
                'name' => 'Communication Skills',
                'description' => '',
            ],

            [
                'parent_id' => 39,
                'name' => 'Building Trust',
                'description' => '',
            ],

            [
                'parent_id' => 39,
                'name' => 'Relationship Enrichment Activities',
                'description' => '',
            ],

            [
                'parent_id' => 40,
                'name' => 'Coping Strategies',
                'description' => '',
            ],

            [
                'parent_id' => 40,
                'name' => 'Moving On Advice',
                'description' => '',
            ],

            [
                'parent_id' => 40,
                'name' => 'Co-Parenting Tips',
                'description' => '',
            ],
        ]);

        $topics->each(fn ($topic) => Topic::factory()->create($topic));
    }
}
