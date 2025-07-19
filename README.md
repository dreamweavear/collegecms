# 🎓 CollegeCMS – CodeIgniter 4 Based College Content Management System

Welcome to **CollegeCMS**, a web-based content management system for educational institutions. Built using **CodeIgniter 4** and styled with **AdminLTE**, this CMS helps manage courses, papers, units, and chapters dynamically.

---

## ✨ Features

- ✅ Course > Paper > Unit > Chapter full hierarchy
- 📝 Rich text chapter editor using TinyMCE
- 📂 Dynamic sidebar navigation for students
- 🔒 Admin login & dashboard using AdminLTE
- 📊 Modular structure with CRUD for all levels
- 📁 Clean and maintainable CodeIgniter 4 structure

---

## 📁 Folder Structure

/app
/public
/writable
/vendor
.env
composer.json

markdown
Copy
Edit

- `app/` – All controllers, models, views
- `public/` – Index file and assets (AdminLTE, CSS/JS)
- `writable/` – Logs, cache, session files
- `.env` – Environment settings (rename from `env`)

---

## 🚀 Installation (Localhost)

1. Clone this repo or download ZIP  
git clone https://github.com/dreamweavear/collegecms.git

markdown
Copy
Edit

2. Set up in XAMPP `htdocs` folder

3. Create MySQL database (e.g. `collegecms`) and import SQL if available

4. Configure `.env` file:
database.default.hostname = localhost
database.default.database = collegecms
database.default.username = root
database.default.password =

markdown
Copy
Edit

5. Run in browser:
http://localhost/collegecms/public

yaml
Copy
Edit

---

## 🔧 Admin Panel Features

- Dashboard with stats
- Add/edit/delete Courses, Papers, Units, Chapters
- Chapter content with TinyMCE editor
- Slug-based routing for SEO

---

## 📌 Requirements

- PHP 7.4+
- MySQL
- Apache server (XAMPP/WAMP)
- Composer (optional for vendor updates)

---

## 📚 Author

**Developed by**: [dreamweavear](https://github.com/dreamweavear)  
**Purpose**: Educational CMS for teaching and demo purposes.

---

## 📄 License

This project is open-source and free to use for educational/non-commercial purposes.

---

# 📘 कॉलेजCMS – CodeIgniter 4 पर आधारित कॉलेज कंटेंट मैनेजमेंट सिस्टम

**CollegeCMS** एक वेब-आधारित कंटेंट मैनेजमेंट सिस्टम है जो शैक्षणिक संस्थानों के लिए डिज़ाइन किया गया है। यह **CodeIgniter 4** और **AdminLTE** पर आधारित है और इससे Course > Paper > Unit > Chapter की सामग्री को व्यवस्थित और प्रदर्शित किया जा सकता है।

---

## ✨ मुख्य विशेषताएँ

- ✅ कोर्स > पेपर > यूनिट > चैप्टर की पूरी श्रृंखला
- 📝 TinyMCE के माध्यम से समृद्ध टेक्स्ट एडिटर
- 📂 छात्रों के लिए डायनामिक साइडबार नेविगेशन
- 🔒 एडमिन पैनल और डैशबोर्ड (AdminLTE UI के साथ)
- 🧩 सभी स्तरों के लिए CRUD ऑपरेशन
- 💡 स्वच्छ और मॉड्यूलर कोड संरचना

---

## ⚙️ इंस्टॉलेशन (स्थानीय कंप्यूटर पर)

1. GitHub से क्लोन करें या ZIP डाउनलोड करें  
git clone https://github.com/dreamweavear/collegecms.git

markdown
Copy
Edit

2. `htdocs` फोल्डर में प्रोजेक्ट रखें

3. XAMPP में एक नया MySQL डेटाबेस बनाएं (जैसे `collegecms`)

4. `.env` फाइल में डेटाबेस विवरण भरें:
database.default.hostname = localhost
database.default.database = collegecms
database.default.username = root
database.default.password =

markdown
Copy
Edit

5. ब्राउज़र में प्रोजेक्ट चलाएँ:
http://localhost/collegecms/public

yaml
Copy
Edit

---

## 🔐 एडमिन पैनल की सुविधाएँ

- डैशबोर्ड (Dashboard)
- कोर्स, पेपर, यूनिट और चैप्टर जोड़ना/संपादित करना/हटाना
- चैप्टर के लिए Rich Text Editor (TinyMCE)
- SEO के लिए slug आधारित लिंक

---

## 💻 आवश्यकताएँ

- PHP 7.4 या उससे ऊपर
- MySQL Database
- Apache Server (XAMPP/WAMP)
- Composer (ऐच्छिक)

---

## 🙋‍♂️ लेखक

**बनाया गया**: [dreamweavear](https://github.com/dreamweavear)  
**उद्देश्य**: कॉलेजों में शिक्षण और प्रदर्शन के लिए एक CMS प्रदान करना।

---

## 📄 लाइसेंस

यह प्रोजेक्ट शैक्षणिक एवं गैर-व्यावसायिक उपयोग के लिए मुफ्त और ओपन-सोर्स है।
