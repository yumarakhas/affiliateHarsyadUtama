# PowerShell script untuk optimasi font classes
$files = @(
    "c:\laragon\www\affiliateHarsyadUtama\resources\views\tentang-kami.blade.php",
    "c:\laragon\www\affiliateHarsyadUtama\resources\views\produk.blade.php",
    "c:\laragon\www\affiliateHarsyadUtama\resources\views\partner.blade.php",
    "c:\laragon\www\affiliateHarsyadUtama\resources\views\beranda.blade.php",
    "c:\laragon\www\affiliateHarsyadUtama\resources\views\landing.blade.php"
)

foreach ($filePath in $files) {
    if (Test-Path $filePath) {
        Write-Host "Processing: $filePath"
        $content = Get-Content $filePath -Raw
        
        # Replace Fredoka One inline styles dengan class
        $content = $content -replace 'style="font-family: ''Fredoka One'', cursive;"\s*\n?\s*class="([^"]*)"', 'class="$1 font-fredoka"'
        
        # Replace Nunito inline styles dengan class  
        $content = $content -replace 'style="font-family: ''Nunito'', sans-serif;"\s*\n?\s*class="([^"]*)"', 'class="$1 font-nunito"'
        
        # Handle cases where style comes after class
        $content = $content -replace 'class="([^"]*)"\s*\n?\s*style="font-family: ''Fredoka One'', cursive;"', 'class="$1 font-fredoka"'
        $content = $content -replace 'class="([^"]*)"\s*\n?\s*style="font-family: ''Nunito'', sans-serif;"', 'class="$1 font-nunito"'
        
        # Handle standalone style attributes without class
        $content = $content -replace '<([^>]*)\s*style="font-family: ''Fredoka One'', cursive;"([^>]*)>', '<$1 class="font-fredoka"$2>'
        $content = $content -replace '<([^>]*)\s*style="font-family: ''Nunito'', sans-serif;"([^>]*)>', '<$1 class="font-nunito"$2>'
        
        Set-Content $filePath $content
        Write-Host "✅ Completed: $filePath"
    }
}
