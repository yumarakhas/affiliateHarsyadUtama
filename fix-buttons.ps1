# PowerShell script untuk optimasi button classes
$files = @(
    "c:\laragon\www\affiliateHarsyadUtama\resources\views\produk.blade.php"
)

foreach ($filePath in $files) {
    if (Test-Path $filePath) {
        Write-Host "Processing: $filePath"
        $content = Get-Content $filePath -Raw
        
        # Replace gradient brand button pattern
        $content = $content -replace 'class="bg-gradient-to-r from-\[#528B89\] to-\[#6C63FF\] text-white px-6 py-2 rounded-full text-sm font-semibold hover:from-\[#446b6a\] hover:to-\[#5a56d1\] transition-all duration-200 shadow-md hover:shadow-lg"', 'class="btn-gradient-brand btn-sm"'
        
        $content = $content -replace 'class="bg-gradient-to-r from-\[#528B89\] to-\[#6C63FF\] text-white px-8 py-3 rounded-full font-semibold hover:from-\[#446b6a\] hover:to-\[#5a56d1\] transition-all inline-block"', 'class="btn-gradient-brand inline-block"'
        
        # Replace carousel button pattern (keep positioning classes)
        $content = $content -replace 'class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white shadow-xl rounded-full p-4 hover:bg-gray-50 transition-all duration-200 z-10 border border-gray-200"', 'class="absolute left-2 top-1/2 transform -translate-y-1/2 btn-carousel z-10"'
        
        $content = $content -replace 'class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white shadow-xl rounded-full p-4 hover:bg-gray-50 transition-all duration-200 z-10 border border-gray-200"', 'class="absolute right-2 top-1/2 transform -translate-y-1/2 btn-carousel z-10"'
        
        # Replace product card pattern
        $content = $content -replace 'class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-6 text-center shadow-lg border border-gray-200 h-auto"', 'class="card-product h-auto"'
        
        Set-Content $filePath $content
        Write-Host "✅ Completed: $filePath"
    }
}
