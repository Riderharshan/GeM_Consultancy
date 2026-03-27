<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\Contact;

/**
 * PageController
 * Handles all static and dynamic page rendering,
 * plus contact form submission and storage.
 */
class PageController extends Controller
{
    /**
     * Display the Home page.
     */
    public function home()
{
    $stats = [
        ['value' => '500+', 'label' => 'Clients Served'],
        ['value' => '1200+', 'label' => 'Tenders Filed'],
        ['value' => '98%', 'label' => 'Success Rate'],
        ['value' => '24/7', 'label' => 'Support'],
    ];

    $services = [
        [
            'icon' => 'store',
            'title' => 'GeM Seller Services',
            'desc' => 'Complete support for sellers including registration, listing, and bidding.',
            'color' => 'emerald'
        ],
        [
            'icon' => 'account_balance',
            'title' => 'GeM Buyer Services',
            'desc' => 'End-to-end support for government buyers and institutions.',
            'color' => 'blue'
        ],
        [
            'icon' => 'school',
            'title' => 'Institution Support',
            'desc' => 'Special services for schools and educational institutions.',
            'color' => 'violet'
        ],
        [
            'icon' => 'verified',
            'title' => 'Compliance Support',
            'desc' => 'Ensure all your documents and processes are compliant.',
            'color' => 'amber'
        ],
    ];

    return view('pages.home', compact('stats', 'services'));
}

    /**
     * Display the About Us page.
     */
    public function about()
    {
        $values = [
            [
                'icon'  => 'verified',
                'title' => 'Integrity',
                'desc'  => 'We operate with complete transparency and honesty, ensuring you always know what we are doing and why.',
            ],
            [
                'icon'  => 'gavel',
                'title' => 'Compliance',
                'desc'  => 'Every service we offer strictly adheres to GeM platform regulations and government procurement norms.',
            ],
            [
                'icon'  => 'workspace_premium',
                'title' => 'Excellence',
                'desc'  => 'We strive for the highest quality in every task — from documentation to final submission.',
            ],
            [
                'icon'  => 'groups',
                'title' => 'Client Focus',
                'desc'  => 'Your success is our priority. We provide personalized attention to every client, big or small.',
            ],
            [
                'icon'  => 'speed',
                'title' => 'Efficiency',
                'desc'  => 'We value your time and work with urgency to ensure swift, accurate, and reliable service delivery.',
            ],
            [
                'icon'  => 'handshake',
                'title' => 'Partnership',
                'desc'  => 'We build long-term relationships, offering ongoing support even after your initial registration is complete.',
            ],
        ];

        return view('pages.about', compact('values'));
    }

    /**
     * Display the Services page.
     */
    public function services()
    {
        $services = [
            [
                'icon'        => 'store',
                'title'       => 'GeM Seller Services',
                'tagline'     => 'For Sellers & Manufacturers',
                'color'       => 'emerald',
                'description' => 'End-to-end seller support — registration, brand approval, product listing, catalog management, bid participation, and order compliance.',
                'items'       => [
                    'GeM Seller Registration',
                    'Brand Approval & OEM Registration',
                    'Product Listing & Catalog Management',
                    'Bid Participation & Tender Filing',
                    'Order Processing & Compliance',
                    'GeM Account Management',
                ],
            ],
            [
                'icon'        => 'account_balance',
                'title'       => 'GeM Buyer Services',
                'tagline'     => 'For Government Departments',
                'color'       => 'blue',
                'description' => 'Comprehensive buyer support for government departments and institutions, from registration to contract management.',
                'items'       => [
                    'Buyer Registration Support',
                    'Tender Creation Assistance',
                    'BOQ Preparation',
                    'Vendor Evaluation Support',
                    'Contract & Order Management',
                ],
            ],
            [
                'icon'        => 'school',
                'title'       => 'Schools & Institutions',
                'tagline'     => 'For Educational Bodies',
                'color'       => 'violet',
                'description' => 'Specialized GeM consultancy for schools, colleges, and educational institutions to procure goods and services efficiently.',
                'items'       => [
                    'GeM Buyer Registration for Schools',
                    'Tender Creation & BOQ Preparation',
                    'Lab Equipment & IT Procurement',
                    'Vendor Selection Guidance',
                    'Documentation & Approval Assistance',
                    'Annual Procurement Planning',
                ],
            ],
            [
                'icon'        => 'lightbulb',
                'title'       => 'ATL Support',
                'tagline'     => 'Atal Tinkering Labs',
                'color'       => 'amber',
                'description' => 'Full consultancy for Atal Tinkering Labs — from proposal writing to infrastructure setup and innovation activities.',
                'items'       => [
                    'ATL Proposal Preparation',
                    'Infrastructure & Equipment Setup',
                    'GeM Registered Vendor Supply',
                    'Teacher Training & Orientation',
                    'Innovation & Competition Guidance',
                    'Compliance & Documentation',
                ],
            ],
            [
                'icon'        => 'account_tree',
                'title'       => 'PFMS Support',
                'tagline'     => 'Public Financial Management',
                'color'       => 'teal',
                'description' => 'Expert guidance on Public Financial Management System for government-funded projects, from registration to reporting.',
                'items'       => [
                    'PFMS Registration & Onboarding',
                    'Bank Account Linking',
                    'Fund Flow Tracking & Reporting',
                    'Documentation for Govt. Programs',
                    'Technical Issue Resolution',
                    'Financial Reporting Compliance',
                ],
            ],
            [
                'icon'        => 'verified',
                'title'       => 'Patents & IP Registration',
                'tagline'     => 'Protect Your Innovation',
                'color'       => 'rose',
                'description' => 'Protect your intellectual property with our expert guidance on patents, copyrights, and industrial design registrations.',
                'items'       => [
                    'Patent Application Filing',
                    'Copyright Registration',
                    'Industrial Design Registration',
                    'Documentation Preparation',
                    'IP Protection Guidance',
                    'Support for Startups & Institutions',
                ],
            ],
        ];

        return view('pages.services', compact('services'));
    }

    /**
     * Display the Testimonials page.
     */
    public function testimonials()
    {
        $testimonials = [
            [
                'name'   => 'Rajesh Kumar',
                'role'   => 'Manufacturer',
                'city'   => 'Bengaluru, Karnataka',
                'avatar' => 'RK',
                'color'  => 'emerald',
                'rating' => 5,
                'quote'  => 'Professional and transparent service. Our GeM registration was completed smoothly without any hassle. The team guided us at every step and ensured 100% compliance.',
            ],
            [
                'name'   => 'Priya Sharma',
                'role'   => 'Service Provider',
                'city'   => 'Mumbai, Maharashtra',
                'avatar' => 'PS',
                'color'  => 'blue',
                'rating' => 5,
                'quote'  => 'Excellent guidance in tender participation. Their expertise saved us weeks of confusion and back-and-forth. We won our first government contract within 2 months!',
            ],
            [
                'name'   => "St. Mary's School",
                'role'   => 'Educational Institution',
                'city'   => 'Mysuru, Karnataka',
                'avatar' => 'SM',
                'color'  => 'violet',
                'rating' => 5,
                'quote'  => 'Our school needed assistance with GeM buyer registration and tender creation. The process was handled efficiently, and we received clear guidance at every step.',
            ],
            [
                'name'   => 'Anil Mehta',
                'role'   => 'MSME Owner',
                'city'   => 'New Delhi',
                'avatar' => 'AM',
                'color'  => 'amber',
                'rating' => 5,
                'quote'  => 'As a small business owner, navigating GeM was daunting. GeM Consultancy made it simple and stress-free. We got our first order within a month of registration!',
            ],
            [
                'name'   => 'Dr. Sunita Rao',
                'role'   => 'Principal, Innovation School',
                'city'   => 'Pune, Maharashtra',
                'avatar' => 'SR',
                'color'  => 'teal',
                'rating' => 5,
                'quote'  => 'Their ATL support was exceptional. They handled everything from proposal preparation to equipment procurement. Our tinkering lab is now fully operational!',
            ],
            [
                'name'   => 'TechStart Innovations',
                'role'   => 'Startup Founder',
                'city'   => 'Hyderabad, Telangana',
                'avatar' => 'TI',
                'color'  => 'rose',
                'rating' => 5,
                'quote'  => 'The patent and IP registration guidance was incredibly thorough. They helped us understand the entire process and filed our application accurately. Highly recommended!',
            ],
        ];

        return view('pages.testimonials', compact('testimonials'));
    }


    /**
     * Display the Contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle Contact Form Submission.
     * Validates input, stores to DB, redirects with success message.
     */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'nullable|string|max:20',
            'service' => 'nullable|string|max:200',
            'message' => 'required|string|min:10|max:2000',
        ]);

        $contact = Contact::create($validated);

        // Send email notification to admin
        try {
            Mail::to(env('ADMIN_MAIL', 'harshan.tn46@gmail.com'))
                ->send(new ContactFormSubmitted($contact));
        } catch (\Exception $e) {
            \Log::error('Contact form mail failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')
            ->with('success', 'Thank you for reaching out! We will get back to you within 24 hours.');
    }


}
