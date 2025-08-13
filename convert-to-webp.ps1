# PowerShell script to convert images to WebP format
# This script will convert PNG, JPG, and JPEG files to WebP format

# Function to convert a single image to WebP
function Convert-ImageToWebP {
    param(
        [string]$InputPath,
        [int]$Quality = 80
    )
    
    # Get file info
    $fileInfo = Get-Item $InputPath
    $directory = $fileInfo.DirectoryName
    $baseName = $fileInfo.BaseName
    $outputPath = Join-Path $directory "$baseName.webp"
    
    # Skip if WebP already exists
    if (Test-Path $outputPath) {
        Write-Host "WebP already exists: $outputPath" -ForegroundColor Yellow
        return $true
    }
    
    try {
        # Use cwebp command to convert
        $arguments = @(
            "-q", $Quality,
            $InputPath,
            "-o", $outputPath
        )
        
        Write-Host "Converting: $InputPath -> $outputPath" -ForegroundColor Green
        
        # Execute cwebp
        $process = Start-Process -FilePath "cwebp" -ArgumentList $arguments -Wait -NoNewWindow -PassThru
        
        if ($process.ExitCode -eq 0) {
            Write-Host "Successfully converted: $baseName" -ForegroundColor Green
            
            # Show file size comparison
            $originalSize = (Get-Item $InputPath).Length
            $webpSize = (Get-Item $outputPath).Length
            $savings = [math]::Round((($originalSize - $webpSize) / $originalSize) * 100, 2)
            
            Write-Host "  Original: $([math]::Round($originalSize/1KB, 2)) KB" -ForegroundColor Cyan
            Write-Host "  WebP: $([math]::Round($webpSize/1KB, 2)) KB" -ForegroundColor Cyan
            Write-Host "  Savings: $savings%" -ForegroundColor Magenta
            Write-Host ""
            
            return $true
        } else {
            Write-Host "Failed to convert: $InputPath (Exit code: $($process.ExitCode))" -ForegroundColor Red
            return $false
        }
    }
    catch {
        Write-Host "Error converting $InputPath : $($_.Exception.Message)" -ForegroundColor Red
        return $false
    }
}

# Main conversion process
Write-Host "=== WebP Conversion Script ===" -ForegroundColor Cyan
Write-Host "Starting image conversion process..." -ForegroundColor White
Write-Host ""

# Check if cwebp is available
try {
    $webpVersion = & cwebp -version 2>&1
    Write-Host "WebP tools found: $($webpVersion[0])" -ForegroundColor Green
} catch {
    Write-Host "ERROR: cwebp not found in PATH. Please ensure WebP tools are installed and in your PATH." -ForegroundColor Red
    exit 1
}

# Get all image files
$imageExtensions = @("*.png", "*.webp", "*.jpeg")
$allImages = @()

foreach ($ext in $imageExtensions) {
    $images = Get-ChildItem -Path "." -Filter $ext -Recurse
    $allImages += $images
}

Write-Host "Found $($allImages.Count) image files to convert" -ForegroundColor White
Write-Host ""

# Conversion statistics
$totalFiles = $allImages.Count
$convertedFiles = 0
$skippedFiles = 0
$errorFiles = 0

# Convert each image
foreach ($image in $allImages) {
    $result = Convert-ImageToWebP -InputPath $image.FullName -Quality 85
    
    if ($result) {
        $convertedFiles++
    } else {
        $errorFiles++
    }
}

# Final statistics
Write-Host "=== Conversion Complete ===" -ForegroundColor Cyan
Write-Host "Total files processed: $totalFiles" -ForegroundColor White
Write-Host "Successfully converted: $convertedFiles" -ForegroundColor Green
Write-Host "Errors: $errorFiles" -ForegroundColor Red
Write-Host ""

if ($convertedFiles -gt 0) {
    Write-Host "WebP files have been created alongside your original images." -ForegroundColor Green
    Write-Host "You can now update your HTML/CSS to use the .webp files for better performance." -ForegroundColor Yellow
}

Write-Host "Done!" -ForegroundColor Cyan
