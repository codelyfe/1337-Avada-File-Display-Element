# 1337 Avada File Display Element Plugin

## Overview
This plugin adds a custom element to Avada Fusion Builder, allowing users to display a file with an icon, title, description, and a download button. It's perfect for showcasing files in a visually appealing way with easy access for users to download.

## Features
- Upload or select a file for display.
- Choose an icon to represent the file.
- Add a title and description for the file.
- Include a customizable download button.
- Option to add a custom CSS class for further styling.

## Installation

1. **Download the Plugin:**
   - Download the plugin files and place them into a folder named `avada-file-display-element` inside the `/wp-content/plugins/` directory.

2. **Activate the Plugin:**
   - Go to your WordPress Admin Dashboard, then navigate to Plugins > Installed Plugins.
   - Find the "Avada File Display Element" plugin in the list and click "Activate."

## Usage

1. **Add the Element in Fusion Builder:**
   - In Avada Fusion Builder, search for the "File Display Block" element.
   - Add the element to the desired section of your page or post.

2. **Configure the Element:**
   - **File URL**: Upload or select a file to display.
   - **Icon**: Choose an icon to represent the file (e.g., folder, document, etc.).
   - **Title**: Provide a title for the file.
   - **Description**: Add a brief description of the file.
   - **Button Text**: Customize the text of the download button (default is "Download").
   - **Custom CSS Class**: Add a custom CSS class for custom styling.

## Shortcode
You can also use the shortcode to display a file with an icon, title, description, and download button:

```php
[file_display_block file_url="your-file-url" file_icon="fusiona-folder" file_title="File Title" file_description="File Description" button_text="Download" custom_class="your-custom-class"]
```

- `file_url`: The URL of the file to display.
- `file_icon`: Icon to display (default is 'fusiona-folder').
- `file_title`: The title of the file.
- `file_description`: The description of the file.
- `button_text`: Text for the download button (default is 'Download').
- `custom_class`: Add a custom CSS class for styling purposes.

## Example

```php
[file_display_block file_url="https://example.com/sample.pdf" file_icon="fusiona-file-pdf" file_title="Sample PDF" file_description="This is a sample PDF file." button_text="Download Now" custom_class="pdf-file-block"]
```

## License
- License: GPLv2
- License URI: https://www.gnu.org/licenses/gpl-2.0.html

## Support
For any issues, you can reach out to the plugin author codelyfe@gmail.com [Donate](https://www.paypal.me/codelyfe).
