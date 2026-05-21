# 🧱 Auto-Author Profile Block

> A custom Gutenberg block that automatically pulls the post author's data directly from the WordPress database.

[![Watch the Video](https://img.shields.io/badge/YouTube-Watch_How_I_Built_This-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](YOUR_YOUTUBE_LINK_HERE)

## 🏗️ Development Approach

When building this block, I wanted to keep the code clean and avoid duplicating data. Here is how I set it up:

* **No Duplicate Data:** I didn't want to save the author's name inside the React block attributes. WordPress already stores this info in the database. Saving it twice causes stale data. 
* **Native PHP Rendering:** The frontend is powered by `render.php`. It uses native functions like `get_the_author_meta()` and `get_avatar()`. This ensures the profile is always 100% up to date.
* **The Magic Bridge:** The WordPress editor needs to look exactly like the live website. But React cannot read the WordPress database directly. To fix this, I used the `<ServerSideRender>` component. It secretly runs the PHP file and shows a perfect live preview right inside the editor.
* **Clean Design:** I used CSS Flexbox for the layout. It makes the author avatar and text align perfectly on any screen size.

## 🛠️ Tech Stack & APIs Used
* **React / ES6+** (`<ServerSideRender>` Component)
* **PHP 7.4+** (Server-side rendering, WordPress User Meta API)
* **CSS Flexbox** (Responsive component layout)
* **WordPress @wordpress/scripts** (Webpack / Babel)

## 🚀 Installation & Testing
1. Download the `.zip` file from the releases or clone this repository.
2. Run `npm install` and `npm run build` to compile the assets.
3. Upload to the `/wp-content/plugins/` directory of your local WordPress environment.
4. Activate the plugin through the WordPress admin dashboard.

---
### 👨‍💻 About the Developer

**Moshtafizur Rahman**  
WordPress & WooCommerce Developer | Remote European Experience  
🌐 [View my full portfolio](https://gutenberg.yourname.dev) | 💼 [Upwork Profile](YOUR_UPWORK_LINK_HERE) | 🔗 [LinkedIn](YOUR_LINKEDIN_LINK_HERE)