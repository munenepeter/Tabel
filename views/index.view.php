<?php include_once 'base.view.php'; ?>

<div class="max-w-4xl mx-auto">
    <div class="py-12 text-center">
        <h1 class="mb-4 text-4xl font-bold text-primary-dark">Welcome to Tabel</h1>
        <p class="mb-8 text-lg text-primary-medium">A lightweight, elegant PHP framework for modern web applications</p>
        
        <div class="flex justify-center space-x-4">
            <a href="/docs" class="px-6 py-3 text-white transition rounded-lg bg-primary-dark hover:bg-primary-medium">
                Get Started
            </a>
            <a href="https://github.com/munenepeter/framework" class="px-6 py-3 transition border rounded-lg border-primary-dark text-primary-dark hover:bg-primary-lighter">
                View on GitHub
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2">
        <div class="p-6 border rounded-lg border-primary-lighter">
            <h2 class="mb-3 text-xl font-semibold text-primary-dark">Simple & Intuitive</h2>
            <p class="text-gray-600">Built with developer experience in mind, offering a clean and straightforward approach to web development.</p>
        </div>

        <div class="p-6 border rounded-lg border-primary-lighter">
            <h2 class="mb-3 text-xl font-semibold text-primary-dark">Modern Architecture</h2>
            <p class="text-gray-600">Leveraging PHP 8+ features with a robust MVC structure for building scalable applications.</p>
        </div>
    </div>
</div>

<?php include_once 'sections/footer.view.php' ?>
