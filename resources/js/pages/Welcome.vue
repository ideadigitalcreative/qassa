<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import {
    ArrowRight,
    Check,
    BarChart3,
    Wallet,
    Users,
    TrendingUp,
    Star,
    Menu,
    X,
    ChevronRight,
    Play,
    CreditCard,
    Smartphone,
    Shield,
    Clock,
    FileText,
    Zap,
    Quote,
    Globe,
    PieChart,
    Calculator,
    Receipt,
    Package,
    Settings,
    Layers,
    Store,
    ShoppingCart,
    Building,
    FileCheck,
    Network,
    UserCog,
    Phone,
    Mail,
    MapPin,
    Facebook,
    Twitter,
    Instagram,
    Linkedin,
    Youtube,
    Heart,
    MessageCircle,
    ArrowUp,
} from 'lucide-vue-next';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);

const loginUrl = '/login';
const registerUrl = '/register';
const dashboardUrl = '/dashboard';

const isMobileMenuOpen = ref(false);
const isScrolled = ref(false);

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
};

const showBackToTop = ref(false);

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
    const handleScroll = () => {
        isScrolled.value = window.scrollY > 20;
        showBackToTop.value = window.scrollY > 500;
    };
    window.addEventListener('scroll', handleScroll);
});

// Trusted companies - Row 1
const trustedLogos1 = ['Boston', 'Java Kitchen', 'Jiwa Group', 'J&T', 'Kenko', 'Mixue', 'OPPO', 'Primastraw', 'Pristine', 'Ruang Guru'];

// Trusted companies - Row 2  
const trustedLogos2 = ['Krisna', 'Adidas', 'Bangor', 'Cimory', 'Kick Avenue', 'Tugu Jogja', 'ZAP', 'Bolde', 'Daimatsu', 'IRC', 'Roti Bakar 88', 'Sanwa'];

// Satu Sistem features
const sistemFeatures = [
    { icon: Zap, title: 'Sederhanakan Bisnis dengan Solusi All-in-One' },
    { icon: Globe, title: 'Fleksibel dipakai di mana saja' },
    { icon: Layers, title: 'Software Bisnis dengan Layanan Lengkap' },
    { icon: PieChart, title: '200+ Laporan real time & otomatis' },
];

// Product solutions
const solutions = [
    { 
        name: 'Qassa Lite', 
        tagline: 'Pantau Bisnis Lebih Praktis',
        desc: 'Aplikasi mobile untuk pantau setiap proses bisnis Anda dalam genggaman.',
        icon: Smartphone,
        color: 'blue'
    },
    { 
        name: 'Qassa Loyalty', 
        tagline: 'Buat Pelanggan Ketagihan Belanja',
        desc: 'Aplikasi loyalty program yang bantu kelola membership digital dan point reward menarik.',
        icon: Users,
        color: 'purple'
    },
    { 
        name: 'Qassa Online', 
        tagline: 'Kelola Bisnis Lebih Efisien',
        desc: 'Software akuntansi dengan fitur terlengkap untuk atur penjualan, stok, hingga laporan otomatis.',
        icon: BarChart3,
        color: 'green'
    },
    { 
        name: 'Qassa POS', 
        tagline: 'Proses Orderan Lebih Cepat',
        desc: 'Aplikasi kasir yang bisa proses orderan, atur meja, dan lihat laporan laba rugi real time.',
        icon: Store,
        color: 'orange'
    },
];

// Ecosystem features
const ecosystemFeatures = [
    { 
        icon: Network, 
        title: 'Lebih Mudah dengan Ekosistem Integrasi',
        desc: 'Setiap transaksi dan aktivitas bisnis tercatat dalam satu sistem yang saling sinkron tanpa perlu input berulang.'
    },
    { 
        icon: Layers, 
        title: 'Fitur-fitur Terlengkap',
        desc: 'Tersedia fitur akuntansi, POS, dan program loyalitas pelanggan untuk maksimalkan bisnis Anda.'
    },
    { 
        icon: CreditCard, 
        title: 'Cukup Satu Pembayaran',
        desc: 'Dengan berlangganan, Anda bisa menggunakan berbagai aplikasi Qassa sesuai kebutuhan.'
    },
];

// Integrations
const integrations = [
    { icon: ShoppingCart, title: 'e-Commerce & Marketplace', desc: 'Kelola toko online tanpa perlu pindah aplikasi, data penjualan dan stok tersinkronisasi dalam satu sistem.' },
    { icon: Building, title: 'Bank & Pembayaran', desc: 'Hubungkan bisnis Anda dengan berbagai bank dan metode pembayaran digital untuk mempermudah proses rekonsiliasi.' },
    { icon: Store, title: 'Point of Sale', desc: 'Semua transaksi dari aplikasi kasir dapat tersinkronisasi secara otomatis sehingga laporan tetap update.' },
    { icon: FileCheck, title: 'Perpajakan', desc: 'Laporan pajak lebih mudah karena sudah terintegrasi dengan Penyedia Jasa Aplikasi Perpajakan (PJAP) resmi dari DJP.' },
    { icon: Globe, title: 'Omnichannel', desc: 'Tingkatkan efisiensi operasional bisnis Anda dengan sistem terlengkap dan terintegrasi.' },
    { icon: UserCog, title: 'HRIS', desc: 'Kelola data karyawan, absensi, hingga penggajian lebih praktis agar bisnis Anda berjalan lebih terstruktur.' },
];

// Partner logos
const partnerLogos = ['BigSeller', 'Altius', 'Bamboo', 'Desty', 'Distri', 'Ginee', 'HelloBill', 'iSeller', 'Mandiri', 'BCA', 'Maybank', 'OCBC', 'Moka', 'PajakIO', 'Paper', 'Pawoon', 'Tokopedia', 'UOB', 'Vida'];

// Business sectors
const sectors = ['Retail', 'F&B', 'Manufaktur', 'Jasa', 'Distribusi', 'Konstruksi'];

// Testimonials - Row 1 (slides left)
const testimonialsRow1 = [
    { quote: 'Dengan fitur dan aplikasi yang user-friendly, Qassa mempermudah dalam pelacakan inventaris dan integrasi data penjualan secara real-time.', name: 'Rendi Emalia', role: 'Head of Finance', company: 'RIAMIRANDA', sector: 'Retail' },
    { quote: 'Laporan keuangan jadi lebih akurat dan cepat. Tim finance kami sangat terbantu dengan otomatisasi yang ada.', name: 'Ahmad Fauzi', role: 'Finance Manager', company: 'PT Maju Jaya', sector: 'Distribusi' },
    { quote: 'Integrasi dengan marketplace bikin pekerjaan jadi lebih efisien. Stok selalu update otomatis.', name: 'Siti Nurhaliza', role: 'Operations Director', company: 'Toko Berkah', sector: 'Retail' },
    { quote: 'Fitur POS sangat membantu proses transaksi di outlet kami. Customer jadi lebih puas dengan layanan yang cepat.', name: 'Budi Santoso', role: 'Store Manager', company: 'Kopi Nusantara', sector: 'F&B' },
    { quote: 'Dengan Qassa, kami bisa pantau bisnis dari mana saja. Dashboard-nya sangat informatif dan mudah dipahami.', name: 'Diana Putri', role: 'CEO', company: 'Beauty Corner', sector: 'Retail' },
];

// Testimonials - Row 2 (slides right)
const testimonialsRow2 = [
    { quote: 'Proses rekonsiliasi bank jadi jauh lebih mudah. Tidak perlu lagi input manual satu per satu.', name: 'Hendra Wijaya', role: 'CFO', company: 'Elektronik Jaya', sector: 'Retail' },
    { quote: 'Program loyalty dari Qassa membantu meningkatkan repeat customer hingga 40% dalam 3 bulan.', name: 'Maya Sari', role: 'Marketing Manager', company: 'Fashion House', sector: 'Retail' },
    { quote: 'Laporan pajak jadi lebih gampang karena sudah terintegrasi dengan sistem perpajakan.', name: 'Eko Prasetyo', role: 'Tax Manager', company: 'PT Abadi Sentosa', sector: 'Manufaktur' },
    { quote: 'Manajemen inventori multi-gudang jadi sangat terorganisir. Tidak ada lagi barang yang terlewat.', name: 'Rina Kusuma', role: 'Warehouse Supervisor', company: 'Distributor Prima', sector: 'Distribusi' },
    { quote: 'Support team Qassa sangat responsif dan helpful. Setiap masalah selalu cepat terselesaikan.', name: 'Andi Firmansyah', role: 'IT Manager', company: 'Resto Keluarga', sector: 'F&B' },
];

// Footer links
const footerLinks = {
    produk: ['Qassa Online', 'Qassa Lite', 'Qassa POS', 'Qassa Loyalty', 'Harga'],
    solusi: ['Retail', 'F&B', 'Jasa', 'Distribusi', 'Manufaktur'],
    resources: ['Blog', 'Panduan', 'Webinar', 'API Docs', 'Status'],
    perusahaan: ['Tentang Kami', 'Karir', 'Partner', 'Kontak'],
};
</script>

<template>
    <Head title="Qassa — Kelola Bisnis Mudah, Qassa Solusinya!">
        <meta name="description" content="Tingkatkan produktivitas dan akurasi pengelolaan bisnis Anda dengan satu sistem terintegrasi. Dipercaya 100.000+ bisnis di Indonesia." />
    </Head>
    
    <div class="min-h-screen bg-white font-sans text-slate-900 antialiased">
        <!-- Header -->
        <!-- Header - Morphing Glassmorphism -->
        <header 
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)]"
            :class="isScrolled ? 'py-4' : 'py-0'"
        >
            <nav 
                class="flex items-center justify-between transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)]"
                :class="[
                    isScrolled 
                        ? 'mx-auto w-[92%] max-w-7xl rounded-full bg-white/80 backdrop-blur-md border border-slate-200/60 px-6 py-3' 
                        : 'w-full max-w-7xl mx-auto bg-transparent border-b border-transparent px-6 py-6 lg:py-8'
                ]"
            >
                <Link href="/" class="flex items-center gap-2.5">
                    <img src="/images/logo.png" alt="Qassa Logo" class="h-9 w-9" />
                    <span class="text-xl font-bold text-slate-900 tracking-tight">Qassa.id</span>
                </Link>
                
                <div class="hidden items-center gap-8 lg:flex">
                    <Link href="/" class="text-sm font-medium text-slate-600 hover:text-orange-500 transition-colors">Home</Link>
                    <a href="#produk" class="text-sm font-medium text-slate-600 hover:text-orange-500 transition-colors">Produk</a>
                    <a href="#solusi" class="text-sm font-medium text-slate-600 hover:text-orange-500 transition-colors">Solusi</a>
                    <a href="#integrasi" class="text-sm font-medium text-slate-600 hover:text-orange-500 transition-colors">Integrasi</a>
                    <a href="#harga" class="text-sm font-medium text-slate-600 hover:text-orange-500 transition-colors">Harga</a>
                </div>
                
                <div class="hidden items-center gap-3 lg:flex">
                    <Link 
                        v-if="$page.props.auth.user"
                        :href="dashboardUrl"
                        class="text-sm font-medium text-slate-600 hover:text-orange-500"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link :href="loginUrl" class="text-sm font-medium text-slate-600 hover:text-orange-500 transition-colors">
                            Masuk
                        </Link>
                        <Link 
                            v-if="canRegister"
                            :href="registerUrl" 
                            class="inline-flex items-center justify-center bg-orange-500 text-white font-semibold px-6 py-2.5 rounded-full hover:bg-orange-600 transition-colors text-sm"
                        >
                            Coba Gratis
                        </Link>
                    </template>
                </div>
                
                <button @click="toggleMobileMenu" class="rounded-full p-2 hover:bg-black/5 lg:hidden transition-colors">
                    <Menu v-if="!isMobileMenuOpen" class="h-6 w-6 text-slate-700" :stroke-width="1.25" />
                    <X v-else class="h-6 w-6 text-slate-700" :stroke-width="1.25" />
                </button>
            </nav>
            
            <!-- Mobile Menu Dropdown (Detached) -->
            <div v-show="isMobileMenuOpen" class="absolute top-full left-0 right-0 mt-2 px-4 lg:hidden">
                <div class="bg-white/90 backdrop-blur-md rounded-2xl border border-white/50 shadow-xl p-6 flex flex-col gap-4">
                    <Link href="/" class="text-slate-600 font-medium p-2 hover:bg-slate-50 rounded-lg">Home</Link>
                    <a href="#produk" class="text-slate-600 font-medium p-2 hover:bg-slate-50 rounded-lg">Produk</a>
                    <a href="#solusi" class="text-slate-600 font-medium p-2 hover:bg-slate-50 rounded-lg">Solusi</a>
                    <a href="#integrasi" class="text-slate-600 font-medium p-2 hover:bg-slate-50 rounded-lg">Integrasi</a>
                    <a href="#harga" class="text-slate-600 font-medium p-2 hover:bg-slate-50 rounded-lg">Harga</a>
                    <hr class="border-slate-100" />
                    <Link :href="loginUrl" class="text-slate-600 font-medium p-2 hover:bg-slate-50 rounded-lg">Masuk</Link>
                    <Link v-if="canRegister" :href="registerUrl" class="bg-orange-500 text-white font-semibold px-6 py-3 rounded-xl hover:bg-orange-600 transition-colors text-center shadow-lg shadow-orange-500/20">
                        Coba Gratis
                    </Link>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero Section -->
            <section class="relative overflow-hidden pt-28 pb-12 lg:pt-36 lg:pb-20">
                <!-- Background Grid Pattern (Square) -->
                <div class="absolute inset-0 h-full w-full bg-white pointer-events-none">
                    <!-- Mobile Grid (Adjusted 35px) -->
                    <div class="absolute h-full w-full lg:hidden" 
                         style="background-image: linear-gradient(to right, rgba(226, 232, 240, 0.5) 1px, transparent 1px), linear-gradient(to bottom, rgba(226, 232, 240, 0.5) 1px, transparent 1px); background-size: 35px 35px;">
                    </div>
                    <!-- Desktop Grid (Standard 50px) -->
                    <div class="absolute h-full w-full hidden lg:block" 
                         style="background-image: linear-gradient(to right, rgba(226, 232, 240, 0.5) 1px, transparent 1px), linear-gradient(to bottom, rgba(226, 232, 240, 0.5) 1px, transparent 1px); background-size: 50px 50px;">
                    </div>
                    
                    <!-- Fade to White at Bottom -->
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white"></div>
                </div>

                <!-- Blob (Blue Only) -->
                <div class="absolute bottom-20 left-1/4 w-64 h-64 lg:w-80 lg:h-80 bg-blue-100/40 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- Desktop Layout (2 Columns) -->
                    <div class="hidden lg:grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Left Content -->
                        <div class="text-left">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-2 rounded-full bg-orange-50 border border-orange-200 px-4 py-2 text-sm font-medium text-orange-600 mb-6">
                                Solusi Bisnis Terintegrasi
                            </div>
                            
                            <!-- Headline -->
                            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight tracking-tight text-slate-900">
                                Kelola Bisnis Mudah, 
                                <span class="text-blue-600">Qassa</span> Solusinya!
                            </h1>
                            
                            <!-- Description -->
                            <p class="mt-6 text-lg text-slate-500 leading-relaxed max-w-lg">
                                Tingkatkan produktivitas dan akurasi pengelolaan bisnis Anda dengan satu sistem terintegrasi.
                            </p>
                            
                            <!-- CTA Buttons - Horizontal -->
                            <div class="mt-8 flex gap-4">
                                <Link 
                                    :href="canRegister ? registerUrl : loginUrl"
                                    class="inline-flex items-center justify-center gap-2 bg-orange-500 text-white font-semibold px-8 py-4 rounded-full hover:bg-orange-600 transition-colors"
                                >
                                    Coba Gratis Sekarang!
                                    <ArrowRight class="h-5 w-5" :stroke-width="1.25" />
                                </Link>
                                <a href="#konsultasi" class="inline-flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 font-semibold px-8 py-4 rounded-full hover:bg-blue-50 transition-colors">
                                    Jadwalkan Konsultasi
                                </a>
                            </div>
                            

                        </div>
                        
                        <!-- Right - Illustration -->
                        <div class="flex justify-center">
                            <img 
                                src="/images/ecosystem-illustration.png" 
                                alt="Qassa integrated ecosystem" 
                                class="w-full max-w-lg object-contain"
                            />
                        </div>
                    </div>
                    
                    <!-- Mobile Layout (Vertical Stack) -->
                    <div class="lg:hidden text-center">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 rounded-full bg-orange-50 border border-orange-200 px-4 py-2 text-sm font-medium text-orange-600 mb-6">
                            Solusi Bisnis Terintegrasi
                        </div>
                        
                        <!-- Headline -->
                        <h1 class="text-3xl sm:text-4xl font-bold leading-tight tracking-tight text-slate-900">
                            Kelola Bisnis Mudah,<br/>
                            <span class="text-blue-600">Qassa</span> Solusinya!
                        </h1>
                        
                        <!-- Description -->
                        <p class="mt-4 text-base text-slate-500 leading-relaxed max-w-md mx-auto">
                            Tingkatkan produktivitas dan akurasi pengelolaan bisnis Anda dengan satu sistem terintegrasi.
                        </p>
                        
                        <!-- CTA Buttons - Vertical Stack Full Width -->
                        <div class="mt-8 space-y-3 px-4">
                            <Link 
                                :href="canRegister ? registerUrl : loginUrl"
                                class="w-full flex items-center justify-center gap-2 bg-orange-500 text-white font-semibold px-6 py-4 rounded-full hover:bg-orange-600 transition-colors"
                            >
                                Coba Gratis Sekarang!
                                <ArrowRight class="h-5 w-5" :stroke-width="1.25" />
                            </Link>
                            <a href="#konsultasi" class="w-full flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 font-semibold px-6 py-4 rounded-full hover:bg-blue-50 transition-colors">
                                Jadwalkan Konsultasi
                            </a>
                        </div>
                        

                        
                        <!-- Illustration -->
                        <div class="mt-10 px-4">
                            <img 
                                src="/images/ecosystem-illustration.png" 
                                alt="Qassa integrated ecosystem" 
                                class="w-full max-w-sm mx-auto object-contain"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trusted Logos Section - Marquee Style -->
            <section class="py-10 bg-white border-y border-slate-100 overflow-hidden">
                <div class="flex gap-12 animate-marquee whitespace-nowrap">
                    <span v-for="logo in [...trustedLogos1, ...trustedLogos1]" :key="logo + Math.random()" class="text-lg font-semibold text-slate-300 hover:text-slate-500 transition-colors flex-shrink-0">
                        {{ logo }}
                    </span>
                </div>
                <div class="flex gap-12 animate-marquee-reverse whitespace-nowrap mt-6">
                    <span v-for="logo in [...trustedLogos2, ...trustedLogos2]" :key="logo + Math.random()" class="text-lg font-semibold text-slate-300 hover:text-slate-500 transition-colors flex-shrink-0">
                        {{ logo }}
                    </span>
                </div>
            </section>

            <!-- Satu Sistem Terintegrasi Section -->
            <section id="produk" class="py-16 lg:py-28 bg-white overflow-hidden">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- Desktop Layout (Hidden on Mobile) -->
                    <div class="hidden lg:grid lg:grid-cols-2 gap-12 xl:gap-20 items-center">
                        <!-- Left - Visual with Woman Image -->
                        <!-- Left - Visual with Woman Image -->
                        <div class="relative">
                            <!-- Blue gradient background container -->
                            <div class="relative rounded-[2rem] bg-gradient-to-br from-blue-50 via-blue-50/50 to-white overflow-hidden border border-blue-100/50">
                                <!-- Decorative elements -->
                                <div class="absolute -top-6 -right-6 w-32 h-32 rounded-full bg-blue-100/40 blur-xl"></div>
                                <div class="absolute -bottom-4 -left-4 w-24 h-24 rounded-full bg-blue-100/50 blur-lg"></div>
                                
                                <!-- Woman Image Container -->
                                <div>
                                    <img 
                                        src="/images/woman-business.png" 
                                        alt="Professional business woman" 
                                        class="relative z-10 w-full h-auto object-cover"
                                    />
                                </div>
                            </div>
                            
                            <!-- Floating Analytics Card -->
                            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 lg:left-auto lg:translate-x-0 lg:-right-8 xl:-right-12 w-72 bg-white rounded-2xl border border-slate-200 overflow-hidden z-20 shadow-lg">
                                <!-- Card Header -->
                                <div class="bg-gradient-to-r from-slate-50 to-white px-4 py-3 border-b border-slate-100">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-semibold text-slate-800">Performa Penjualan</span>
                                        <div class="flex gap-1">
                                            <div class="w-2 h-2 rounded-full bg-red-400"></div>
                                            <div class="w-2 h-2 rounded-full bg-yellow-400"></div>
                                            <div class="w-2 h-2 rounded-full bg-green-400"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Content - Table -->
                                <div class="p-4">
                                    <table class="w-full">
                                        <thead>
                                            <tr class="text-xs text-slate-400">
                                                <th class="text-left font-medium pb-2">Produk</th>
                                                <th class="text-right font-medium pb-2">Total Penjualan</th>
                                                <th class="text-right font-medium pb-2 w-12"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-xs">
                                            <tr class="border-b border-slate-100">
                                                <td class="py-2 flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                                                    <span class="text-slate-700">Bolu Meranti</span>
                                                </td>
                                                <td class="py-2 text-right text-slate-600">Rp 5.000.000</td>
                                                <td class="py-2 text-right">
                                                    <span class="text-green-500 font-semibold">60%</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-slate-100">
                                                <td class="py-2 flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                                                    <span class="text-slate-700">Lapis Legit</span>
                                                </td>
                                                <td class="py-2 text-right text-slate-600">Rp 5.982.891</td>
                                                <td class="py-2 text-right">
                                                    <span class="text-green-500 font-semibold">40%</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-slate-100">
                                                <td class="py-2 flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                                    <span class="text-slate-700">Brownies Amanda</span>
                                                </td>
                                                <td class="py-2 text-right text-slate-600">Rp 2.250.000</td>
                                                <td class="py-2 text-right">
                                                    <span class="text-green-500 font-semibold">80%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 flex items-center gap-2">
                                                    <span class="w-2 h-2 rounded-full bg-blue-300"></span>
                                                    <span class="text-slate-700">Nastar Premium</span>
                                                </td>
                                                <td class="py-2 text-right text-slate-600">Rp 3.750.000</td>
                                                <td class="py-2 text-right">
                                                    <span class="text-green-500 font-semibold">35%</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right - Content -->
                        <div class="lg:pl-4">
                            <h2 class="text-3xl lg:text-4xl xl:text-[2.75rem] font-bold text-slate-900 leading-tight tracking-tight">
                                Satu Sistem Terintegrasi untuk Semua Kebutuhan Bisnis
                            </h2>
                            <p class="mt-5 text-lg text-slate-500 leading-relaxed">
                                Kelola keuangan, inventori, operasional, hingga laporan dari satu platform di mana pun Anda berada.
                            </p>
                            
                            <!-- Features grid with blue icons - Desktop -->
                            <div class="mt-10 grid grid-cols-2 gap-4">
                                <div 
                                    v-for="(feature, i) in sistemFeatures" 
                                    :key="i"
                                    class="group flex items-start gap-4 p-4 rounded-2xl bg-white border border-slate-200 hover:border-blue-300 transition-all duration-300"
                                >
                                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                        <component :is="feature.icon" class="h-5 w-5" :stroke-width="1.25" />
                                    </div>
                                    <p class="text-sm font-medium text-slate-700 leading-snug pt-1">{{ feature.title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Layout (Hidden on Desktop) -->
                    <div class="lg:hidden">
                        <!-- Woman Image with Floating Card -->
                        <div class="relative mb-8">
                            <!-- Blue gradient background -->
                            <div class="relative rounded-3xl bg-gradient-to-br from-blue-50 via-blue-50/50 to-white overflow-hidden border border-blue-100/50">
                                <!-- Decorative circles -->
                                <div class="absolute top-4 right-4 w-16 h-16 rounded-full bg-blue-100/50 blur-lg"></div>
                                <div class="absolute bottom-20 left-2 w-12 h-12 rounded-full bg-blue-100/40 blur-md"></div>
                                
                                <!-- Woman Image -->
                                <div>
                                    <img 
                                        src="/images/woman-business.png" 
                                        alt="Professional business woman" 
                                        class="w-full h-auto object-cover"
                                    />
                                </div>
                            </div>
                            
                            <!-- Floating Analytics Card - Mobile -->
                            <div class="absolute -bottom-4 left-4 right-4 bg-white rounded-2xl border border-slate-200 overflow-hidden">
                                <div class="bg-gradient-to-r from-slate-50 to-white px-4 py-2.5 border-b border-slate-100">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-semibold text-slate-800">Performa Penjualan</span>
                                        <div class="flex gap-1">
                                            <div class="w-2 h-2 rounded-full bg-red-400"></div>
                                            <div class="w-2 h-2 rounded-full bg-yellow-400"></div>
                                            <div class="w-2 h-2 rounded-full bg-green-400"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 space-y-2">
                                    <div class="flex items-center justify-between text-xs border-b border-slate-100 pb-2">
                                        <div class="flex items-center gap-2">
                                            <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                                            <span class="text-slate-700">Bolu Meranti</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <span class="text-slate-500">Rp 5.000.000</span>
                                            <span class="text-green-500 font-semibold">60%</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-2">
                                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                            <span class="text-slate-700">Brownies Amanda</span>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <span class="text-slate-500">Rp 2.250.000</span>
                                            <span class="text-green-500 font-semibold">80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content - Mobile -->
                        <div class="text-center mt-12 px-2">
                            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 leading-tight tracking-tight">
                                Satu Sistem Terintegrasi untuk Semua Kebutuhan Bisnis
                            </h2>
                            <p class="mt-4 text-base text-slate-500 leading-relaxed max-w-md mx-auto">
                                Kelola keuangan, inventori, operasional, hingga laporan dari satu platform di mana pun Anda berada.
                            </p>
                        </div>
                        
                        <!-- Features - Mobile (Vertical Stack) -->
                        <div class="mt-8 space-y-3 px-2">
                            <div 
                                v-for="(feature, i) in sistemFeatures" 
                                :key="'mobile-' + i"
                                class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-slate-200"
                            >
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white flex items-center justify-center flex-shrink-0">
                                    <component :is="feature.icon" class="h-6 w-6" :stroke-width="1.25" />
                                </div>
                                <p class="text-sm font-medium text-slate-700 leading-snug">{{ feature.title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Temukan Solusi Section -->
            <section id="solusi" class="py-20 lg:py-28 bg-slate-50">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- Section Header -->
                    <div class="text-center max-w-2xl mx-auto mb-12 lg:mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                            Temukan Solusi Sesuai Kebutuhan Bisnis Anda
                        </h2>
                    </div>
                    
                    <!-- Solutions Grid -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
                        <!-- Card 1: Qassa Lite -->
                        <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-blue-300 transition-all group">
                            <!-- Icon -->
                            <div class="w-14 h-14 flex items-center justify-center mb-5">
                                <Smartphone class="h-10 w-10 text-blue-600" :stroke-width="1.25" />
                            </div>
                            
                            <!-- Product Name -->
                            <p class="text-xs font-semibold text-orange-500 uppercase tracking-wide mb-2">Qassa Lite</p>
                            
                            <!-- Tagline -->
                            <h3 class="text-lg font-bold text-slate-900 mb-2 leading-snug">Pantau Bisnis Lebih Praktis</h3>
                            
                            <!-- Description -->
                            <p class="text-sm text-slate-500 mb-5 leading-relaxed">
                                Aplikasi mobile untuk pantau setiap proses bisnis Anda dalam genggaman.
                            </p>
                            
                            <!-- Link -->
                            <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-orange-500 hover:text-orange-600 group-hover:gap-2 transition-all">
                                Lihat Selengkapnya 
                                <ChevronRight class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                        </div>
                        
                        <!-- Card 2: Qassa Loyalty -->
                        <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-blue-300 transition-all group">
                            <!-- Icon -->
                            <div class="w-14 h-14 flex items-center justify-center mb-5">
                                <Heart class="h-10 w-10 text-blue-600" :stroke-width="1.25" />
                            </div>
                            
                            <!-- Product Name -->
                            <p class="text-xs font-semibold text-orange-500 uppercase tracking-wide mb-2">Qassa Loyalty</p>
                            
                            <!-- Tagline -->
                            <h3 class="text-lg font-bold text-slate-900 mb-2 leading-snug">Buat Pelanggan Ketagihan Belanja</h3>
                            
                            <!-- Description -->
                            <p class="text-sm text-slate-500 mb-5 leading-relaxed">
                                Aplikasi loyalty program yang bantu kelola membership digital dan point reward menarik.
                            </p>
                            
                            <!-- Link -->
                            <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-orange-500 hover:text-orange-600 group-hover:gap-2 transition-all">
                                Lihat Selengkapnya 
                                <ChevronRight class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                        </div>
                        
                        <!-- Card 3: Qassa Online -->
                        <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-blue-300 transition-all group">
                            <!-- Icon -->
                            <div class="w-14 h-14 flex items-center justify-center mb-5">
                                <Globe class="h-10 w-10 text-blue-600" :stroke-width="1.25" />
                            </div>
                            
                            <!-- Product Name -->
                            <p class="text-xs font-semibold text-orange-500 uppercase tracking-wide mb-2">Qassa Online</p>
                            
                            <!-- Tagline -->
                            <h3 class="text-lg font-bold text-slate-900 mb-2 leading-snug">Kelola Bisnis Lebih Efisien</h3>
                            
                            <!-- Description -->
                            <p class="text-sm text-slate-500 mb-5 leading-relaxed">
                                Software akuntansi dengan fitur terlengkap untuk atur penjualan, stok, hingga laporan otomatis.
                            </p>
                            
                            <!-- Link -->
                            <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-orange-500 hover:text-orange-600 group-hover:gap-2 transition-all">
                                Lihat Selengkapnya 
                                <ChevronRight class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                        </div>
                        
                        <!-- Card 4: Qassa POS -->
                        <div class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-blue-300 transition-all group">
                            <!-- Icon -->
                            <div class="w-14 h-14 flex items-center justify-center mb-5">
                                <Store class="h-10 w-10 text-blue-600" :stroke-width="1.25" />
                            </div>
                            
                            <!-- Product Name -->
                            <p class="text-xs font-semibold text-orange-500 uppercase tracking-wide mb-2">Qassa POS</p>
                            
                            <!-- Tagline -->
                            <h3 class="text-lg font-bold text-slate-900 mb-2 leading-snug">Proses Orderan Lebih Cepat</h3>
                            
                            <!-- Description -->
                            <p class="text-sm text-slate-500 mb-5 leading-relaxed">
                                Aplikasi kasir yang bisa proses orderan, atur meja, dan lihat laporan laba rugi real time.
                            </p>
                            
                            <!-- Link -->
                            <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-orange-500 hover:text-orange-600 group-hover:gap-2 transition-all">
                                Lihat Selengkapnya 
                                <ChevronRight class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Ekosistem Section -->
            <section class="py-20 lg:py-28 bg-white">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                        <!-- Left - Content -->
                        <div>
                            <!-- Badge -->
                            <span class="inline-flex items-center rounded-full bg-orange-50 border border-orange-200 px-4 py-2 text-sm font-medium text-orange-600 mb-6">
                                Lebih Mudah dengan #1 Ekosistem
                            </span>
                            
                            <!-- Headline -->
                            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                                Ekosistem Terbaik yang<br class="hidden sm:block" />
                                Tumbuh Bersama Bisnis
                            </h2>
                            
                            <!-- Supporting Paragraph -->
                            <p class="mt-4 text-lg text-slate-500 leading-relaxed">
                                Dari urusan pembukuan hingga pelanggan, semua terhubung dalam satu ekosistem yang bekerja otomatis.
                            </p>
                            
                            <!-- Feature Cards -->
                            <div class="mt-10 space-y-4">
                                <!-- Card 1 -->
                                <div class="flex items-start gap-4 p-5 bg-white rounded-2xl border border-slate-200">
                                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-slate-900">Lebih Mudah dengan Ekosistem Integrasi</h4>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed">
                                            Setiap transaksi dan aktivitas bisnis tercatat dalam satu sistem yang saling sinkron tanpa perlu input berulang.
                                        </p>
                                    </div>
                                </div>
                                
                                <!-- Card 2 -->
                                <div class="flex items-start gap-4 p-5 bg-white rounded-2xl border border-slate-200">
                                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-slate-900">Fitur-fitur Terlengkap</h4>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed">
                                            Tersedia fitur akuntansi, POS, dan program loyalitas pelanggan untuk memaksimalkan bisnis Anda.
                                        </p>
                                    </div>
                                </div>
                                
                                <!-- Card 3 -->
                                <div class="flex items-start gap-4 p-5 bg-white rounded-2xl border border-slate-200">
                                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold">
                                        3
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-slate-900">Cukup Satu Pembayaran</h4>
                                        <p class="text-sm text-slate-500 mt-1 leading-relaxed">
                                            Dengan berlangganan, Anda bisa menggunakan berbagai aplikasi Qassa sesuai kebutuhan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right - Laptop Image with Floating Icons -->
                        <div class="relative">
                            <!-- Main Image Container -->
                            <div class="relative rounded-3xl overflow-hidden border border-slate-200">
                                <img 
                                    src="/images/laptop-dashboard.png" 
                                    alt="Dashboard bisnis di laptop" 
                                    class="w-full h-auto object-cover"
                                />
                            </div>
                            
                            <!-- Floating App Icons -->
                            <!-- Icon A (Red) - Top Right -->
                            <div class="absolute -top-4 -right-4 lg:-top-6 lg:-right-6 w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-white border border-slate-200 flex items-center justify-center">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center text-white font-bold text-lg">
                                    A
                                </div>
                            </div>
                            
                            <!-- Icon A lite (Red) - Top Left -->
                            <div class="absolute top-8 -left-4 lg:-left-6 w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-white border border-slate-200 flex items-center justify-center">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-gradient-to-br from-red-400 to-red-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold leading-tight text-center">A<br/>lite</span>
                                </div>
                            </div>
                            
                            <!-- Icon Teal/Green - Bottom Left -->
                            <div class="absolute bottom-12 -left-3 lg:-left-5 w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-white border border-slate-200 flex items-center justify-center">
                                <div class="w-8 h-8 lg:w-10 lg:h-10 rounded-full bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center">
                                    <PieChart class="w-4 h-4 lg:w-5 lg:h-5 text-white" />
                                </div>
                            </div>
                            
                            <!-- Icon Blue - Bottom Right -->
                            <div class="absolute bottom-4 -right-3 lg:-right-5 w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-white border border-slate-200 flex items-center justify-center">
                                <div class="w-8 h-8 lg:w-10 lg:h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                                    <BarChart3 class="w-4 h-4 lg:w-5 lg:h-5 text-white" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-8 lg:py-16">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- CTA Container with Primary Color Background -->
                    <div class="relative bg-gradient-to-br from-blue-600 via-blue-600 to-blue-700 rounded-[2.5rem] lg:rounded-3xl overflow-hidden">
                        <!-- Dotted Pattern Overlay -->
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                        
                        <!-- Desktop Layout (Hidden on Mobile) -->
                        <div class="hidden lg:grid relative z-10 lg:grid-cols-2 gap-12 items-center p-12">
                            <!-- Left - Image Area -->
                            <div class="relative">
                                <div class="relative rounded-2xl overflow-hidden">
                                    <img 
                                        src="/images/woman-tablet.png" 
                                        alt="Professional woman with tablet" 
                                        class="w-full h-auto object-cover rounded-2xl"
                                    />
                                    
                                    <!-- Floating Labels - Desktop -->
                                    <div class="absolute top-6 left-6 inline-flex items-center gap-2 bg-white rounded-full px-4 py-2 border border-slate-100">
                                        <Check class="w-4 h-4 text-green-500" />
                                        <span class="text-sm font-medium text-slate-800">Gratis 30 Hari</span>
                                    </div>
                                    
                                    <div class="absolute top-6 right-6 inline-flex items-center gap-2 bg-white rounded-full px-4 py-2 border border-slate-100">
                                        <Check class="w-4 h-4 text-green-500" />
                                        <span class="text-sm font-medium text-slate-800">Tanpa Syarat</span>
                                    </div>
                                    
                                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 inline-flex items-center gap-2 bg-white rounded-full px-4 py-2 border border-slate-100">
                                        <Check class="w-4 h-4 text-green-500" />
                                        <span class="text-sm font-medium text-slate-800">Tanpa Batasan Fitur</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Right - CTA Content (Desktop) -->
                            <div class="text-left">
                                <h2 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                                    Coba Gratis Sekarang
                                </h2>
                                
                                <p class="mt-4 text-lg text-white/80 leading-relaxed max-w-md">
                                    Dapatkan akses gratis selama 30 hari dan nikmati dengan mudah fitur lengkap ekosistem Qassa.
                                </p>
                                
                                <div class="mt-8 flex gap-4">
                                    <Link 
                                        :href="canRegister ? registerUrl : loginUrl"
                                        class="inline-flex items-center justify-center gap-2 bg-orange-500 text-white font-semibold px-8 py-4 rounded-full hover:bg-orange-600 transition-colors"
                                    >
                                        Coba Gratis
                                        <ArrowRight class="h-5 w-5" />
                                    </Link>
                                    
                                    <a href="#" class="inline-flex items-center justify-center gap-2 border-2 border-white text-white font-semibold px-8 py-4 rounded-full hover:bg-white/10 transition-colors">
                                        <Phone class="h-5 w-5" :stroke-width="1.25" />
                                        Hubungi Kami
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mobile Layout (Hidden on Desktop) -->
                        <div class="lg:hidden relative z-10 p-6 pb-10">
                            <!-- Top Image Area -->
                            <div class="relative mb-8">
                                <div class="relative rounded-2xl overflow-hidden">
                                    <img 
                                        src="/images/woman-tablet.png" 
                                        alt="Professional woman with tablet" 
                                        class="w-full h-auto object-cover rounded-2xl"
                                    />
                                    
                                    <!-- Floating Labels - Mobile -->
                                    <div class="absolute top-3 right-3 inline-flex items-center gap-1.5 bg-white rounded-full px-3 py-1.5 border border-slate-100">
                                        <Check class="w-3.5 h-3.5 text-green-500" />
                                        <span class="text-xs font-medium text-slate-800">Gratis 30 Hari</span>
                                    </div>
                                    
                                    <div class="absolute top-12 left-3 inline-flex items-center gap-1.5 bg-white rounded-full px-3 py-1.5 border border-slate-100">
                                        <Check class="w-3.5 h-3.5 text-green-500" />
                                        <span class="text-xs font-medium text-slate-800">Tanpa Syarat</span>
                                    </div>
                                    
                                    <div class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 bg-white rounded-full px-3 py-1.5 border border-slate-100">
                                        <Check class="w-3.5 h-3.5 text-green-500" />
                                        <span class="text-xs font-medium text-slate-800">Tanpa Batasan Fitur</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Text Content - Centered -->
                            <div class="text-center mb-8">
                                <h2 class="text-2xl sm:text-3xl font-bold text-white leading-tight">
                                    Coba Gratis Sekarang
                                </h2>
                                
                                <p class="mt-3 text-base text-white/80 leading-relaxed">
                                    Dapatkan akses gratis selama 30 hari dan nikmati dengan mudah fitur lengkap ekosistem Qassa.
                                </p>
                            </div>
                            
                            <!-- CTA Buttons - Vertical Stack Full Width -->
                            <div class="space-y-3">
                                <!-- Primary Button -->
                                <Link 
                                    :href="canRegister ? registerUrl : loginUrl"
                                    class="w-full flex items-center justify-center gap-2 bg-orange-500 text-white font-semibold px-6 py-4 rounded-full hover:bg-orange-600 transition-colors"
                                >
                                    Coba Gratis
                                    <ArrowRight class="h-5 w-5" />
                                </Link>
                                
                                <!-- Secondary Button -->
                                <a href="#" class="w-full flex items-center justify-center gap-2 border-2 border-white text-white font-semibold px-6 py-4 rounded-full hover:bg-white/10 transition-colors">
                                    <Phone class="h-5 w-5" :stroke-width="1.25" />
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Integrasi Section -->
            <section id="integrasi" class="py-20 lg:py-28 bg-slate-50">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- Section Header -->
                    <div class="text-center max-w-2xl mx-auto mb-12 lg:mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                            Integrasi dengan Berbagai Sistem
                        </h2>
                        <p class="mt-4 text-lg text-slate-500 leading-relaxed">
                            Hubungkan Qassa dengan layanan atau aplikasi lainnya yang mendukung perkembangan bisnis Anda.
                        </p>
                    </div>
                    
                    <!-- Integration Cards Grid -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
                        <div v-for="(int, i) in integrations" :key="i" class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-blue-300 transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white flex items-center justify-center mb-4">
                                <component :is="int.icon" class="h-6 w-6" />
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">{{ int.title }}</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">{{ int.desc }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dipercaya Berbagai Sektor Section -->
            <section class="py-20 lg:py-28 bg-white">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- Top Text Area - Desktop: headline left, paragraph right -->
                    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 lg:gap-12 mb-12 lg:mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight lg:max-w-none lg:whitespace-nowrap">
                            Dipercaya oleh Berbagai Sektor
                        </h2>
                        <p class="text-base lg:text-lg text-slate-500 leading-relaxed lg:max-w-lg lg:text-right">
                            Qassa menjadi solusi kepercayaan banyak bisnis di Indonesia. Gabung sekarang dengan ribuan bisnis yang telah percaya dan rasakan sendiri manfaatnya!
                        </p>
                    </div>
                    
                    <!-- Main Visual Card -->
                    <div class="relative rounded-3xl overflow-hidden border border-slate-200">
                        <!-- Background Image -->
                        <img 
                            src="/images/barista-owner.png" 
                            alt="Barista pemilik cafe menggunakan aplikasi" 
                            class="w-full h-[400px] lg:h-[500px] object-cover"
                        />
                        
                        <!-- Floating UI Overlays -->
                        
                        <!-- 1. Stat Card (Left) -->
                        <div class="absolute top-4 left-4 lg:top-8 lg:left-8 bg-white rounded-2xl border border-slate-100 p-3 lg:p-5 w-32 lg:w-48">
                            <div class="space-y-2 lg:space-y-4">
                                <div>
                                    <div class="text-lg lg:text-2xl font-bold text-slate-900">600K+</div>
                                    <div class="text-[10px] lg:text-xs text-slate-500 leading-tight">Pengguna di Indonesia</div>
                                </div>
                                <div class="border-t border-slate-100 pt-2 lg:pt-3">
                                    <div class="text-lg lg:text-2xl font-bold text-slate-900">110K+</div>
                                    <div class="text-[10px] lg:text-xs text-slate-500 leading-tight">Perusahaan Berlangganan</div>
                                </div>
                                <div class="border-t border-slate-100 pt-2 lg:pt-3">
                                    <div class="text-lg lg:text-2xl font-bold text-slate-900">35+</div>
                                    <div class="text-[10px] lg:text-xs text-slate-500 leading-tight">Partner Bisnis</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2. Transaction Card (Bottom Left/Center) - Hidden on small mobile -->
                        <div class="hidden sm:block absolute bottom-4 left-1/2 -translate-x-1/2 lg:bottom-8 lg:left-1/2 lg:-translate-x-1/2 bg-white rounded-2xl border border-slate-100 p-3 lg:p-4 w-48 lg:w-64">
                            <div class="flex items-center justify-between mb-2 lg:mb-3">
                                <span class="text-xs lg:text-sm font-semibold text-slate-800">Pesanan Baru</span>
                                <span class="text-[10px] lg:text-xs text-green-600 bg-green-50 px-2 py-0.5 rounded-full">Aktif</span>
                            </div>
                            <div class="space-y-2 lg:space-y-3">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-xs lg:text-sm font-medium text-slate-800">Coffee Gula Aren</div>
                                        <div class="text-[10px] lg:text-xs text-slate-500">Ice • Large</div>
                                    </div>
                                    <div class="text-xs lg:text-sm font-bold text-blue-600">Rp 28.000</div>
                                </div>
                                <div class="flex items-center justify-between pt-2 border-t border-slate-100">
                                    <span class="text-[10px] lg:text-xs text-slate-500">Ahmad Rizky</span>
                                    <div class="flex items-center gap-2">
                                        <button class="w-5 h-5 lg:w-6 lg:h-6 rounded bg-slate-100 text-slate-600 flex items-center justify-center text-xs lg:text-sm">−</button>
                                        <span class="text-xs lg:text-sm font-medium text-slate-800">2</span>
                                        <button class="w-5 h-5 lg:w-6 lg:h-6 rounded bg-blue-600 text-white flex items-center justify-center text-xs lg:text-sm">+</button>
                                        <span class="text-[10px] lg:text-xs text-slate-500">Pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 3. Sales Chart Card (Bottom Right) -->
                        <div class="absolute bottom-4 right-4 lg:bottom-8 lg:right-8 bg-white rounded-2xl border border-slate-100 p-3 lg:p-4 w-40 lg:w-72">
                            <div class="flex items-center justify-between mb-2 lg:mb-3">
                                <span class="text-xs lg:text-sm font-semibold text-slate-800">Penjualan Bulanan</span>
                                <TrendingUp class="w-3 h-3 lg:w-4 lg:h-4 text-green-500" :stroke-width="1.25" />
                            </div>
                            <!-- Mini Chart -->
                            <div class="relative h-16 lg:h-20 flex items-end gap-1">
                                <div v-for="(h, idx) in [35, 50, 45, 70, 85, 60]" :key="idx" class="flex-1 flex flex-col items-center gap-1">
                                    <div 
                                        :class="[
                                            'w-full rounded-t transition-all',
                                            idx === 4 ? 'bg-blue-600' : 'bg-blue-200'
                                        ]"
                                        :style="`height: ${h}%`"
                                    ></div>
                                    <span class="text-[10px] text-slate-400">{{ ['Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt'][idx] }}</span>
                                </div>
                            </div>
                            <!-- Tooltip for highlighted bar -->
                            <div class="absolute bottom-20 lg:bottom-24 right-12 lg:right-16 bg-slate-800 text-white text-xs px-2 py-1 rounded">
                                Rp 10.250.000
                                <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-2 h-2 bg-slate-800 rotate-45"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial Section -->
            <section class="py-20 lg:py-28 bg-slate-50 overflow-hidden">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- Section Header -->
                    <div class="text-center max-w-2xl mx-auto mb-12 lg:mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                            Kata Mereka tentang Qassa
                        </h2>
                        <p class="mt-4 text-lg text-slate-500 leading-relaxed">
                            Dengarkan langsung dari pengguna kami tentang bagaimana solusi kami membantu mereka.
                        </p>
                    </div>
                </div>
                
                <!-- Testimonial Sliders (Full Width with Fade) -->
                <div class="relative">
                    <!-- Left Fade Gradient -->
                    <div class="absolute left-0 top-0 bottom-0 w-20 lg:w-32 bg-gradient-to-r from-slate-50 to-transparent z-10 pointer-events-none"></div>
                    <!-- Right Fade Gradient -->
                    <div class="absolute right-0 top-0 bottom-0 w-20 lg:w-32 bg-gradient-to-l from-slate-50 to-transparent z-10 pointer-events-none"></div>
                    
                    <div class="space-y-4">
                        <!-- Row 1 - Slides Left -->
                        <div class="flex gap-4 animate-marquee-testimonial">
                            <div 
                                v-for="(t, i) in [...testimonialsRow1, ...testimonialsRow1]" 
                                :key="'r1-' + i" 
                                class="flex-shrink-0 w-[280px] lg:w-[320px] bg-white rounded-xl border border-slate-200 p-4 hover:border-blue-300 transition-all"
                            >
                                <!-- Header -->
                                <div class="flex items-center justify-between mb-3">
                                    <span class="px-2 py-0.5 rounded-full bg-blue-50 text-blue-600 text-xs font-medium">{{ t.sector }}</span>
                                    <div class="flex gap-0.5">
                                        <Star v-for="s in 5" :key="s" class="h-3 w-3 fill-amber-400 text-amber-400" />
                                    </div>
                                </div>
                                
                                <!-- Quote -->
                                <p class="text-slate-700 text-sm leading-relaxed mb-4 line-clamp-3">
                                    "{{ t.quote }}"
                                </p>
                                
                                <!-- Author -->
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-xs">
                                        {{ t.name.charAt(0) }}
                                    </div>
                                    <div>
                                        <p class="font-semibold text-slate-900 text-xs">{{ t.name }}</p>
                                        <p class="text-slate-500 text-xs">{{ t.company }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Row 2 - Slides Right -->
                        <div class="flex gap-4 animate-marquee-testimonial-reverse">
                            <div 
                                v-for="(t, i) in [...testimonialsRow2, ...testimonialsRow2]" 
                                :key="'r2-' + i" 
                                class="flex-shrink-0 w-[280px] lg:w-[320px] bg-white rounded-xl border border-slate-200 p-4 hover:border-blue-300 transition-all"
                            >
                                <!-- Header -->
                                <div class="flex items-center justify-between mb-3">
                                    <span class="px-2 py-0.5 rounded-full bg-blue-50 text-blue-600 text-xs font-medium">{{ t.sector }}</span>
                                    <div class="flex gap-0.5">
                                        <Star v-for="s in 5" :key="s" class="h-3 w-3 fill-amber-400 text-amber-400" />
                                    </div>
                                </div>
                                
                                <!-- Quote -->
                                <p class="text-slate-700 text-sm leading-relaxed mb-4 line-clamp-3">
                                    "{{ t.quote }}"
                                </p>
                                
                                <!-- Author -->
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-xs">
                                        {{ t.name.charAt(0) }}
                                    </div>
                                    <div>
                                        <p class="font-semibold text-slate-900 text-xs">{{ t.name }}</p>
                                        <p class="text-slate-500 text-xs">{{ t.company }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Final CTA Section -->
            <section class="py-16 lg:py-20 bg-white">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <!-- CTA Container -->
                    <div class="relative bg-gradient-to-br from-blue-600 via-blue-600 to-blue-700 rounded-3xl overflow-hidden">
                        <!-- Dotted Pattern Overlay -->
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-500/30 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-blue-400/20 rounded-full blur-3xl"></div>
                        
                        <div class="relative z-10 py-12 lg:py-14 px-6 lg:px-12 text-center">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-2 rounded-full bg-white/20 border border-white/30 px-4 py-2 text-sm font-medium text-white mb-6">
                                <Zap class="h-4 w-4" />
                                Mulai Sekarang
                            </div>
                            
                            <!-- Headline -->
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                                Siap Wujudkan Bisnis<br class="hidden sm:block" />
                                Jadi Lebih Mudah?
                            </h2>
                            
                            <!-- Description -->
                            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto leading-relaxed">
                                Diskusikan kebutuhan bisnis Anda sekarang dan mulai jalankan bisnis lebih mudah bersama Qassa.
                            </p>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <Link 
                                    :href="canRegister ? registerUrl : loginUrl"
                                    class="inline-flex items-center justify-center gap-2 bg-orange-500 text-white font-semibold px-8 py-4 rounded-full hover:bg-orange-600 transition-colors"
                                >
                                    Coba Gratis Sekarang
                                    <ArrowRight class="h-5 w-5" />
                                </Link>
                                <a href="#konsultasi" class="inline-flex items-center justify-center gap-2 border-2 border-white text-white font-semibold px-8 py-4 rounded-full hover:bg-white/10 transition-colors">
                                    <Phone class="h-5 w-5" :stroke-width="1.25" />
                                    Jadwalkan Konsultasi
                                </a>
                            </div>
                            
                            <!-- Trust Note -->
                            <p class="mt-8 text-sm text-white/70 flex items-center justify-center gap-2">
                                <Check class="h-4 w-4 text-green-400" />
                                Gratis 30 hari, tanpa kartu kredit
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-white py-16 border-t border-slate-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mb-12">
                    <!-- Brand -->
                    <div class="col-span-2 md:col-span-1">
                        <div class="flex items-center gap-2.5 mb-4">
                            <img src="/images/logo.png" alt="Qassa Logo" class="h-10 w-10" />
                            <span class="text-xl font-bold text-slate-900">Qassa.id</span>
                        </div>
                        <p class="text-sm text-slate-500 leading-relaxed mb-6">
                            Software bisnis terintegrasi untuk kelola keuangan, inventori, dan operasional.
                        </p>
                        
                        <!-- App Download -->
                        <div class="mb-6">
                            <a href="#" class="inline-block transition-transform hover:scale-105">
                                <img src="/images/storeapp.png" alt="Download Aplikasi Qassa" class="h-10 w-auto" />
                            </a>
                        </div>
                        
                        <div class="flex gap-3">
                            <a href="#" class="w-9 h-9 rounded-lg bg-slate-100 text-slate-500 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors">
                                <Facebook class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                            <a href="#" class="w-9 h-9 rounded-lg bg-slate-100 text-slate-500 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors">
                                <Instagram class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                            <a href="#" class="w-9 h-9 rounded-lg bg-slate-100 text-slate-500 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors">
                                <Youtube class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                            <a href="#" class="w-9 h-9 rounded-lg bg-slate-100 text-slate-500 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 transition-colors">
                                <Linkedin class="h-4 w-4" :stroke-width="1.25" />
                            </a>
                        </div>
                    </div>
                    
                    <!-- Links -->
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-4">Produk</h4>
                        <ul class="space-y-2.5 text-sm">
                            <li v-for="l in footerLinks.produk" :key="l">
                                <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">{{ l }}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-4">Solusi</h4>
                        <ul class="space-y-2.5 text-sm">
                            <li v-for="l in footerLinks.solusi" :key="l">
                                <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">{{ l }}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-4">Resources</h4>
                        <ul class="space-y-2.5 text-sm">
                            <li v-for="l in footerLinks.resources" :key="l">
                                <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">{{ l }}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-900 mb-4">Perusahaan</h4>
                        <ul class="space-y-2.5 text-sm">
                            <li v-for="l in footerLinks.perusahaan" :key="l">
                                <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">{{ l }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Bottom -->
                <div class="pt-8 border-t border-slate-200 flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-sm text-slate-500">© 2024 Qassa. Hak cipta dilindungi.</p>
                    <div class="flex gap-6 text-sm">
                        <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="text-slate-500 hover:text-blue-600 transition-colors">Keamanan</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Back to Top Button (Left Bottom) -->
        <div class="fixed bottom-6 left-6 z-40">
            <transition
                enter-active-class="transition duration-300 ease-out"
                enter-from-class="translate-y-10 opacity-0"
                enter-to-class="translate-y-0 opacity-100"
                leave-active-class="transition duration-300 ease-in"
                leave-from-class="translate-y-0 opacity-100"
                leave-to-class="translate-y-10 opacity-0"
            >
                <button 
                    v-show="showBackToTop"
                    @click="scrollToTop"
                    class="w-12 h-12 rounded-full bg-orange-500 text-white flex items-center justify-center shadow-lg shadow-orange-500/30 hover:bg-orange-600 hover:-translate-y-1 transition-all duration-300"
                    aria-label="Back to Top"
                >
                    <ArrowUp class="w-6 h-6" :stroke-width="2.5" />
                </button>
            </transition>
        </div>

        <!-- WhatsApp Floating Button (Right Bottom) -->
        <div class="fixed bottom-6 right-6 z-40 flex flex-col gap-4 items-end">
            <a 
                href="https://wa.me/6281234567890" 
                target="_blank"
                class="w-14 h-14 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-lg shadow-green-500/30 hover:bg-[#20bd5a] hover:scale-110 transition-all duration-300 group relative"
                aria-label="Chat WhatsApp"
            >
                <!-- Tooltip Label -->
                <span class="absolute right-full mr-4 top-1/2 -translate-y-1/2 bg-white text-slate-800 text-sm font-bold px-4 py-2 rounded-xl shadow-xl opacity-0 translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 whitespace-nowrap border border-slate-100 hidden lg:block pointer-events-none">
                    Hubungi Kami
                    <!-- Arrow tooltip -->
                    <span class="absolute top-1/2 -right-1.5 -translate-y-1/2 w-3 h-3 bg-white rotate-45 border-t border-r border-slate-100"></span>
                </span>
                
                <MessageCircle class="w-7 h-7 fill-white/20" :stroke-width="2" />
            </a>
        </div>
    </div>
</template>

<style>
@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes marquee-reverse {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

@keyframes marquee-testimonial {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes marquee-testimonial-reverse {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

.animate-marquee {
    animation: marquee 30s linear infinite;
}

.animate-marquee-reverse {
    animation: marquee-reverse 30s linear infinite;
}

.animate-marquee-testimonial {
    animation: marquee-testimonial 40s linear infinite;
}

.animate-marquee-testimonial-reverse {
    animation: marquee-testimonial-reverse 40s linear infinite;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
