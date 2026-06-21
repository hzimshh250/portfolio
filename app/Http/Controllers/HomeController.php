<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function index(): View
    {
        $projects = [
            [
                'id'          => 'corporate-website',
                'title'       => 'CORPORATE WEBSITE',
                'description' => 'Main company corporate website for Hijrah Group — built on WordPress with custom theme development, responsive design, and content management system.',
                'details'     => 'Developed the official corporate website for Hijrah Group to establish a professional online presence. The project involved setting up a fully customised WordPress environment with a bespoke theme tailored to the company\'s branding guidelines. Key deliverables included a responsive multi-page layout, a content management system for non-technical staff, and SEO-optimised page structures.',
                'role'        => 'Lead Frontend & WordPress Developer',
                'challenges'  => 'Translating the company\'s brand identity into a pixel-perfect WordPress theme without a starter framework. Ensuring cross-browser consistency and mobile responsiveness across all pages.',
                'image'       => asset('images/projects/corporate-website/ss-1.png'),
                'src'         => null,
                'live'        => 'https://grouphijrah.com.my/', // ← paste corporate website URL
                'tags'        => ['WordPress', 'PHP', 'CSS', 'CMS'],
                'year'        => '2025',
                'gallery'     => [
                    asset('images/projects/corporate-website/ss-1.png'),
                    // add more: asset('images/projects/corporate-website/ss-2.png'),
                ],
            ],
            [
                'id'          => 'project-management-system',
                'title'       => 'PROJECT MANAGEMENT SYSTEM',
                'description' => 'Internal project management system with role-based access control (RBAC), task tracking, team collaboration, and full Blade UI — built entirely with Laravel.',
                'details'     => 'A comprehensive internal tool built for Hijrah Group to manage projects, tasks, and team members in one centralised platform. The system features a granular role-based access control layer (Admin, Manager, Staff), a task board with status tracking, file attachments, comment threads per task, and a real-time activity log. The entire UI is server-rendered using Laravel Blade with no external JS framework.',
                'role'        => 'Full Stack Developer (Solo)',
                'challenges'  => 'Designing a flexible RBAC system that could accommodate future role additions without breaking existing permission logic. Handling file uploads securely and implementing an activity feed that remained performant as records grew.',
                'image'       => asset('images/projects/project-management-system/ss-1.png'),
                'src'         => null,
                'live'        => null, // restricted — internal system, no public URL
                'tags'        => ['Laravel', 'PHP', 'RBAC', 'Blade', 'MySQL'],
                'year'        => '2025',
                'gallery'     => [
                    asset('images/projects/project-management-system/ss-1.png'),
                    asset('images/projects/project-management-system/ss-2.png'),
                    asset('images/projects/project-management-system/ss-3.png'),
                    asset('images/projects/project-management-system/ss-4.png'),
                ],
            ],
            [
                'id'          => 'ecommerce-platform',
                'title'       => 'E-COMMERCE PLATFORM',
                'description' => 'Full-featured e-commerce system with product listings, cart, order management, and integrated payment gateway — built on Laravel with MySQL backend.',
                'details'     => 'A production e-commerce platform for Hijrah Group enabling online product sales with a full shopping lifecycle — from browsing and cart management to checkout and order fulfilment. Features include product category management, image galleries per product, an integrated payment gateway for real-time transactions, order status tracking for customers, and a vendor dashboard for inventory and sales reporting.',
                'role'        => 'Full Stack Developer',
                'challenges'  => 'Integrating the payment gateway webhook reliably in a shared hosting environment. Managing stock inventory atomically to prevent overselling under concurrent checkout conditions.',
                'image'       => asset('images/projects/ecommerce-platform/ss-1.png'),
                'src'         => null,
                'live'        => 'https://hijrahmall.grouphijrah.com.my/', // ← paste e-commerce URL
                'tags'        => ['Laravel', 'PHP', 'Payment API', 'MySQL'],
                'year'        => '2026',
                'gallery'     => [
                    asset('images/projects/ecommerce-platform/ss-1.png'),
                ],
            ],
            [
                'id'          => 'hall-booking-system',
                'title'       => 'HALL BOOKING SYSTEM',
                'description' => 'Online hall reservation platform with availability calendar, booking management, payment gateway integration, and admin approval workflow.',
                'details'     => 'A web-based hall reservation system allowing customers to view availability, select time slots, and pay online for venue bookings. The admin panel provides a full booking management interface with approval/rejection workflows, calendar views, and exportable reports. Payment is handled via integrated gateway with automatic confirmation emails sent upon successful transactions.',
                'role'        => 'Full Stack Developer',
                'challenges'  => 'Building a reliable slot-conflict detection algorithm to prevent double bookings across overlapping time ranges. Handling payment failure edge cases gracefully while holding slot reservations temporarily.',
                'image'       => asset('images/projects/hall-booking-system/ss-1.png'),
                'src'         => null,
                'live'        => 'https://mbs.hijrahgroup.com.my/', // ← paste hall booking URL
                'tags'        => ['Laravel', 'PHP', 'Payment API', 'MySQL'],
                'year'        => '2026',
                'gallery'     => [
                    asset('images/projects/hall-booking-system/ss-1.png'),
                    asset('images/projects/hall-booking-system/ss-2.png'),
                ],
            ],
        ];

        $experiences = [
            [
                'role'    => 'IT & SALES CONSULTANT (FULL STACK DEV)',
                'company' => 'HIJRAH GROUP // ON-SITE',
                'period'  => 'JAN 2026 — MAR 2026',
                'bullets' => [
                    'Developed and enhanced full stack web applications using Laravel with frontend, backend, and MySQL integration.',
                    'Implemented role-based access control (RBAC) for enterprise-level permission management.',
                    'Integrated multilingual support and payment gateway into production systems.',
                    'Delivered UI/UX improvements and collaborated with the team via GitHub.',
                ],
            ],
            [
                'role'    => 'IT INTERN (FULL STACK DEVELOPER)',
                'company' => 'HIJRAH GROUP // ON-SITE',
                'period'  => 'AUG 2025 — JAN 2026',
                'bullets' => [
                    'Developed and enhanced web-based management systems using Laravel and MySQL.',
                    'Implemented frontend features using HTML, CSS, JavaScript, and Bootstrap.',
                    'Designed database schemas and handled CRUD operations for real users.',
                    'Collaborated with the team using Git/GitHub and deployed systems to production.',
                ],
            ],
        ];

        $skills = [
            'PROGRAMMING & FRAMEWORKS' => ['PHP', 'Laravel', 'JavaScript', 'Java', 'C#', 'HTML', 'CSS', 'Tailwind CSS', 'Unity (C#)'],
            'IDES & TOOLS'             => ['VS Code', 'Android Studio', 'Visual Studio', 'Eclipse', 'Unity Editor', 'Blender', 'Adobe Animate'],
            'DATABASE MANAGEMENT'      => ['MySQL', 'Firebase Realtime DB', 'Microsoft Access'],
            'VERSION CONTROL'          => ['Git', 'GitHub'],
        ];

        return view('welcome', compact('projects', 'experiences', 'skills'));
    }

    public function contact(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Mail::to('hazimshah69@gmail.com')->send(
            new ContactMail(
                senderName: $validated['name'],
                senderEmail: $validated['email'],
                senderMessage: $validated['message'],
            )
        );

        return response()->json(['status' => 'ok']);
    }
}
