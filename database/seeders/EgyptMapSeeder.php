<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class EgyptMapSeeder extends Seeder
{
    public function run()
    {
        City::query()->delete();

        City::create(['title' => ["ar" => "القاهرة", "en" => "Cairo"]])
            ->areas()->createMany([
                ['title' => ["ar" => "15 مايو", "en" => "15 May"]],
                ['title' => ["ar" => "الازبكية", "en" => "Al Azbakeyah"]],
                ['title' => ["ar" => "البساتين", "en" => "Al Basatin"]],
                ['title' => ["ar" => "التبين", "en" => "Tebin"]],
                ['title' => ["ar" => "الخليفة", "en" => "El-Khalifa"]],
                ['title' => ["ar" => "الدراسة", "en" => "El darrasa"]],
                ['title' => ["ar" => "الدرب الاحمر", "en" => "Aldarb Alahmar"]],
                ['title' => ["ar" => "الزاوية الحمراء", "en" => "Zawya al-Hamra"]],
                ['title' => ["ar" => "الزيتون", "en" => "El-Zaytoun"]],
                ['title' => ["ar" => "الساحل", "en" => "Sahel"]],
                ['title' => ["ar" => "السلام", "en" => "El Salam"]],
                ['title' => ["ar" => "السيدة زينب", "en" => "Sayeda Zeinab"]],
                ['title' => ["ar" => "الشرابية", "en" => "El Sharabeya"]],
                ['title' => ["ar" => "مدينة الشروق", "en" => "Shorouk"]],
                ['title' => ["ar" => "الظاهر", "en" => "El Daher"]],
                ['title' => ["ar" => "العتبة", "en" => "Ataba"]],
                ['title' => ["ar" => "القاهرة الجديدة", "en" => "New Cairo"]],
                ['title' => ["ar" => "المرج", "en" => "El Marg"]],
                ['title' => ["ar" => "عزبة النخل", "en" => "Ezbet el Nakhl"]],
                ['title' => ["ar" => "المطرية", "en" => "Matareya"]],
                ['title' => ["ar" => "المعادى", "en" => "Maadi"]],
                ['title' => ["ar" => "المعصرة", "en" => "Maasara"]],
                ['title' => ["ar" => "المقطم", "en" => "Mokattam"]],
                ['title' => ["ar" => "المنيل", "en" => "Manyal"]],
                ['title' => ["ar" => "الموسكى", "en" => "Mosky"]],
                ['title' => ["ar" => "النزهة", "en" => "Nozha"]],
                ['title' => ["ar" => "الوايلى", "en" => "Waily"]],
                ['title' => ["ar" => "باب الشعرية", "en" => "Bab al-Shereia"]],
                ['title' => ["ar" => "بولاق", "en" => "Bolaq"]],
                ['title' => ["ar" => "جاردن سيتى", "en" => "Garden City"]],
                ['title' => ["ar" => "حدائق القبة", "en" => "Hadayek El-Kobba"]],
                ['title' => ["ar" => "حلوان", "en" => "Helwan"]],
                ['title' => ["ar" => "دار السلام", "en" => "Dar Al Salam"]],
                ['title' => ["ar" => "شبرا", "en" => "Shubra"]],
                ['title' => ["ar" => "طره", "en" => "Tura"]],
                ['title' => ["ar" => "عابدين", "en" => "Abdeen"]],
                ['title' => ["ar" => "عباسية", "en" => "Abaseya"]],
                ['title' => ["ar" => "عين شمس", "en" => "Ain Shams"]],
                ['title' => ["ar" => "مدينة نصر", "en" => "Nasr City"]],
                ['title' => ["ar" => "مصر الجديدة", "en" => "New Heliopolis"]],
                ['title' => ["ar" => "مصر القديمة", "en" => "Masr Al Qadima"]],
                ['title' => ["ar" => "منشية ناصر", "en" => "Mansheya Nasir"]],
                ['title' => ["ar" => "مدينة بدر", "en" => "Badr City"]],
                ['title' => ["ar" => "مدينة العبور", "en" => "Obour City"]],
                ['title' => ["ar" => "وسط البلد", "en" => "Cairo Downtown"]],
                ['title' => ["ar" => "الزمالك", "en" => "Zamalek"]],
                ['title' => ["ar" => "قصر النيل", "en" => "Kasr El Nile"]],
                ['title' => ["ar" => "الرحاب", "en" => "Rehab"]],
                ['title' => ["ar" => "القطامية", "en" => "Katameya"]],
                ['title' => ["ar" => "مدينتي", "en" => "Madinty"]],
                ['title' => ["ar" => "روض الفرج", "en" => "Rod Alfarag"]],
                ['title' => ["ar" => "شيراتون", "en" => "Sheraton"]],
                ['title' => ["ar" => "الجمالية", "en" => "El-Gamaleya"]],
                ['title' => ["ar" => "العاشر من رمضان", "en" => "10th of Ramadan City"]],
                ['title' => ["ar" => "الحلمية", "en" => "Helmeyat Alzaytoun"]],
                ['title' => ["ar" => "النزهة الجديدة", "en" => "New Nozha"]],
                ['title' => ["ar" => "العاصمة الإدارية", "en" => "Capital New"]]
            ]);


        City::create(['title' => ["ar" => "الجيزة", "en" => "Giza"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الجيزة", "en" => "Giza"]],
                ['title' => ["ar" => "السادس من أكتوبر", "en" => "Sixth of October"]],
                ['title' => ["ar" => "الشيخ زايد", "en" => "Cheikh Zayed"]],
                ['title' => ["ar" => "الحوامدية", "en" => "Hawamdiyah"]],
                ['title' => ["ar" => "البدرشين", "en" => "Al Badrasheen"]],
                ['title' => ["ar" => "الصف", "en" => "Saf"]],
                ['title' => ["ar" => "أطفيح", "en" => "Atfih"]],
                ['title' => ["ar" => "العياط", "en" => "Al Ayat"]],
                ['title' => ["ar" => "الباويطي", "en" => "Al-Bawaiti"]],
                ['title' => ["ar" => "منشأة القناطر", "en" => "ManshiyetAl Qanater"]],
                ['title' => ["ar" => "أوسيم", "en" => "Oaseem"]],
                ['title' => ["ar" => "كرداسة", "en" => "Kerdasa"]],
                ['title' => ["ar" => "أبو النمرس", "en" => "Abu Nomros"]],
                ['title' => ["ar" => "كفر غطاطي", "en" => "Kafr Ghati"]],
                ['title' => ["ar" => "منشأة البكاري", "en" => "Manshiyet Al Bakari"]],
                ['title' => ["ar" => "الدقى", "en" => "Dokki"]],
                ['title' => ["ar" => "العجوزة", "en" => "Agouza"]],
                ['title' => ["ar" => "الهرم", "en" => "Haram"]],
                ['title' => ["ar" => "الوراق", "en" => "Warraq"]],
                ['title' => ["ar" => "امبابة", "en" => "Imbaba"]],
                ['title' => ["ar" => "بولاق الدكرور", "en" => "Boulaq Dakrour"]],
                ['title' => ["ar" => "الواحات البحرية", "en" => "Al Wahat Al Baharia"]],
                ['title' => ["ar" => "العمرانية", "en" => "Omraneya"]],
                ['title' => ["ar" => "المنيب", "en" => "Moneeb"]],
                ['title' => ["ar" => "بين السرايات", "en" => "Bin Alsarayat"]],
                ['title' => ["ar" => "الكيت كات", "en" => "Kit Kat"]],
                ['title' => ["ar" => "المهندسين", "en" => "Mohandessin"]],
                ['title' => ["ar" => "فيصل", "en" => "Faisal"]],
                ['title' => ["ar" => "أبو رواش", "en" => "Abu Rawash"]],
                ['title' => ["ar" => "حدائق الأهرام", "en" => "Hadayek Alahram"]],
                ['title' => ["ar" => "الحرانية", "en" => "Haraneya"]],
                ['title' => ["ar" => "حدائق اكتوبر", "en" => "Hadayek October"]],
                ['title' => ["ar" => "صفط اللبن", "en" => "Saft Allaban"]],
                ['title' => ["ar" => "القرية الذكية", "en" => "Smart Village"]],
                ['title' => ["ar" => "ارض اللواء", "en" => "Ard Ellwaa"]],
            ]);

        City::create(['title' => ["ar" => "الأسكندرية", "en" => "Alexandria"]])
            ->areas()->createMany([
                ['title' => ["ar" => "ابو قير", "en" => "Abu Qir"]],
                ['title' => ["ar" => "الابراهيمية", "en" => "Al Ibrahimeyah"]],
                ['title' => ["ar" => "الأزاريطة", "en" => "Azarita"]],
                ['title' => ["ar" => "الانفوشى", "en" => "Anfoushi"]],
                ['title' => ["ar" => "الدخيلة", "en" => "Dekheila"]],
                ['title' => ["ar" => "السيوف", "en" => "El Soyof"]],
                ['title' => ["ar" => "العامرية", "en" => "Ameria"]],
                ['title' => ["ar" => "اللبان", "en" => "El Labban"]],
                ['title' => ["ar" => "المفروزة", "en" => "Al Mafrouza"]],
                ['title' => ["ar" => "المنتزه", "en" => "El Montaza"]],
                ['title' => ["ar" => "المنشية", "en" => "Mansheya"]],
                ['title' => ["ar" => "الناصرية", "en" => "Naseria"]],
                ['title' => ["ar" => "امبروزو", "en" => "Ambrozo"]],
                ['title' => ["ar" => "باب شرق", "en" => "Bab Sharq"]],
                ['title' => ["ar" => "برج العرب", "en" => "Bourj Alarab"]],
                ['title' => ["ar" => "ستانلى", "en" => "Stanley"]],
                ['title' => ["ar" => "سموحة", "en" => "Smouha"]],
                ['title' => ["ar" => "سيدى بشر", "en" => "Sidi Bishr"]],
                ['title' => ["ar" => "شدس", "en" => "Shads"]],
                ['title' => ["ar" => "غيط العنب", "en" => "Gheet Alenab"]],
                ['title' => ["ar" => "فلمينج", "en" => "Fleming"]],
                ['title' => ["ar" => "فيكتوريا", "en" => "Victoria"]],
                ['title' => ["ar" => "كامب شيزار", "en" => "Camp Shizar"]],
                ['title' => ["ar" => "كرموز", "en" => "Karmooz"]],
                ['title' => ["ar" => "محطة الرمل", "en" => "Mahta Alraml"]],
                ['title' => ["ar" => "مينا البصل", "en" => "Mina El-Basal"]],
                ['title' => ["ar" => "العصافرة", "en" => "Asafra"]],
                ['title' => ["ar" => "العجمي", "en" => "Agamy"]],
                ['title' => ["ar" => "بكوس", "en" => "Bakos"]],
                ['title' => ["ar" => "بولكلي", "en" => "Boulkly"]],
                ['title' => ["ar" => "كليوباترا", "en" => "Cleopatra"]],
                ['title' => ["ar" => "جليم", "en" => "Glim"]],
                ['title' => ["ar" => "المعمورة", "en" => "Al Mamurah"]],
                ['title' => ["ar" => "المندرة", "en" => "Al Mandara"]],
                ['title' => ["ar" => "محرم بك", "en" => "Moharam Bek"]],
                ['title' => ["ar" => "الشاطبي", "en" => "Elshatby"]],
                ['title' => ["ar" => "سيدي جابر", "en" => "Sidi Gaber"]],
                ['title' => ["ar" => "الساحل الشمالي", "en" => "North Coast\/sahel"]],
                ['title' => ["ar" => "الحضرة", "en" => "Alhadra"]],
                ['title' => ["ar" => "العطارين", "en" => "Alattarin"]],
                ['title' => ["ar" => "سيدي كرير", "en" => "Sidi Kerir"]],
                ['title' => ["ar" => "الجمرك", "en" => "Elgomrok"]],
                ['title' => ["ar" => "المكس", "en" => "Al Max"]],
                ['title' => ["ar" => "مارينا", "en" => "Marina"]],
            ]);

        City::create(['title' => ["ar" => "الدقهلية", "en" => "Dakahlia"]])
            ->areas()->createMany([


                ['title' => ["ar" => "المنصورة", "en" => "Mansoura"]],
                ['title' => ["ar" => "طلخا", "en" => "Talkha"]],
                ['title' => ["ar" => "ميت غمر", "en" => "Mitt Ghamr"]],
                ['title' => ["ar" => "دكرنس", "en" => "Dekernes"]],
                ['title' => ["ar" => "أجا", "en" => "Aga"]],
                ['title' => ["ar" => "منية النصر", "en" => "Menia El Nasr"]],
                ['title' => ["ar" => "السنبلاوين", "en" => "Sinbillawin"]],
                ['title' => ["ar" => "الكردي", "en" => "El Kurdi"]],
                ['title' => ["ar" => "بني عبيد", "en" => "Bani Ubaid"]],
                ['title' => ["ar" => "المنزلة", "en" => "Al Manzala"]],
                ['title' => ["ar" => "تمي الأمديد", "en" => "tami al'amdid"]],
                ['title' => ["ar" => "الجمالية", "en" => "aljamalia"]],
                ['title' => ["ar" => "شربين", "en" => "Sherbin"]],
                ['title' => ["ar" => "المطرية", "en" => "Mataria"]],
                ['title' => ["ar" => "بلقاس", "en" => "Belqas"]],
                ['title' => ["ar" => "ميت سلسيل", "en" => "Meet Salsil"]],
                ['title' => ["ar" => "جمصة", "en" => "Gamasa"]],
                ['title' => ["ar" => "محلة دمنة", "en" => "Mahalat Damana"]],
                ['title' => ["ar" => "نبروه", "en" => "Nabroh"]],
            ]);

        City::create(['title' => ["ar" => "البحر الأحمر", "en" => "Red Sea"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الغردقة", "en" => "Hurghada"]],
                ['title' => ["ar" => "رأس غارب", "en" => "Ras Ghareb"]],
                ['title' => ["ar" => "سفاجا", "en" => "Safaga"]],
                ['title' => ["ar" => "القصير", "en" => "El Qusiar"]],
                ['title' => ["ar" => "مرسى علم", "en" => "Marsa Alam"]],
                ['title' => ["ar" => "الشلاتين", "en" => "Shalatin"]],
                ['title' => ["ar" => "حلايب", "en" => "Halaib"]],
                ['title' => ["ar" => "الدهار", "en" => "Aldahar"]],

            ]);

        City::create(['title' => ["ar" => "البحيرة", "en" => "Beheira"]])
            ->areas()->createMany([
                ['title' => ["ar" => "دمنهور", "en" => "Damanhour"]],
                ['title' => ["ar" => "كفر الدوار", "en" => "Kafr El Dawar"]],
                ['title' => ["ar" => "رشيد", "en" => "Rashid"]],
                ['title' => ["ar" => "إدكو", "en" => "Edco"]],
                ['title' => ["ar" => "أبو المطامير", "en" => "Abu al-Matamir"]],
                ['title' => ["ar" => "أبو حمص", "en" => "Abu Homs"]],
                ['title' => ["ar" => "الدلنجات", "en" => "Delengat"]],
                ['title' => ["ar" => "المحمودية", "en" => "Mahmoudiyah"]],
                ['title' => ["ar" => "الرحمانية", "en" => "Rahmaniyah"]],
                ['title' => ["ar" => "إيتاي البارود", "en" => "Itai Baroud"]],
                ['title' => ["ar" => "حوش عيسى", "en" => "Housh Eissa"]],
                ['title' => ["ar" => "شبراخيت", "en" => "Shubrakhit"]],
                ['title' => ["ar" => "كوم حمادة", "en" => "Kom Hamada"]],
                ['title' => ["ar" => "بدر", "en" => "Badr"]],
                ['title' => ["ar" => "وادي النطرون", "en" => "Wadi Natrun"]],
                ['title' => ["ar" => "النوبارية الجديدة", "en" => "New Nubaria"]],
                ['title' => ["ar" => "النوبارية", "en" => "Alnoubareya"]],
            ]);

        City::create(['title' => ["ar" => "الفيوم", "en" => "Fayoum"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الفيوم", "en" => "Fayoum"]],
                ['title' => ["ar" => "الفيوم الجديدة", "en" => "Fayoum El Gedida"]],
                ['title' => ["ar" => "طامية", "en" => "Tamiya"]],
                ['title' => ["ar" => "سنورس", "en" => "Snores"]],
                ['title' => ["ar" => "إطسا", "en" => "Etsa"]],
                ['title' => ["ar" => "إبشواي", "en" => "Epschway"]],
                ['title' => ["ar" => "يوسف الصديق", "en" => "Yusuf El Sediaq"]],
                ['title' => ["ar" => "الحادقة", "en" => "Hadqa"]],
                ['title' => ["ar" => "اطسا", "en" => "Atsa"]],
                ['title' => ["ar" => "الجامعة", "en" => "Algamaa"]],
                ['title' => ["ar" => "السيالة", "en" => "Sayala"]],
            ]);

        City::create(['title' => ["ar" => "الغربية", "en" => "Gharbiya"]])
            ->areas()->createMany([
                ['title' => ["ar" => "طنطا", "en" => "Tanta"]],
                ['title' => ["ar" => "المحلة الكبرى", "en" => "Al Mahalla Al Kobra"]],
                ['title' => ["ar" => "كفر الزيات", "en" => "Kafr El Zayat"]],
                ['title' => ["ar" => "زفتى", "en" => "Zefta"]],
                ['title' => ["ar" => "السنطة", "en" => "El Santa"]],
                ['title' => ["ar" => "قطور", "en" => "Qutour"]],
                ['title' => ["ar" => "بسيون", "en" => "Basion"]],
                ['title' => ["ar" => "سمنود", "en" => "Samannoud"]],
            ]);

        City::create(['title' => ["ar" => "الإسماعلية", "en" => "Ismailia"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الإسماعيلية", "en" => "Ismailia"]],
                ['title' => ["ar" => "فايد", "en" => "Fayed"]],
                ['title' => ["ar" => "القنطرة شرق", "en" => "Qantara Sharq"]],
                ['title' => ["ar" => "القنطرة غرب", "en" => "Qantara Gharb"]],
                ['title' => ["ar" => "التل الكبير", "en" => "El Tal El Kabier"]],
                ['title' => ["ar" => "أبو صوير", "en" => "Abu Sawir"]],
                ['title' => ["ar" => "القصاصين الجديدة", "en" => "Kasasien El Gedida"]],
                ['title' => ["ar" => "نفيشة", "en" => "Nefesha"]],
                ['title' => ["ar" => "الشيخ زايد", "en" => "Sheikh Zayed"]],
            ]);

        City::create(['title' => ["ar" => "المنوفية", "en" => "Menofia"]])
            ->areas()->createMany([
                ['title' => ["ar" => "شبين الكوم", "en" => "Shbeen El Koom"]],
                ['title' => ["ar" => "مدينة السادات", "en" => "Sadat City"]],
                ['title' => ["ar" => "منوف", "en" => "Menouf"]],
                ['title' => ["ar" => "سرس الليان", "en" => "Sars El-Layan"]],
                ['title' => ["ar" => "أشمون", "en" => "Ashmon"]],
                ['title' => ["ar" => "الباجور", "en" => "Al Bagor"]],
                ['title' => ["ar" => "قويسنا", "en" => "Quesna"]],
                ['title' => ["ar" => "بركة السبع", "en" => "Berkat El Saba"]],
                ['title' => ["ar" => "تلا", "en" => "Tala"]],
                ['title' => ["ar" => "الشهداء", "en" => "Al Shohada"]],
            ]);

        City::create(['title' => ["ar" => "المنيا", "en" => "Minya"]])
            ->areas()->createMany([
                ['title' => ["ar" => "المنيا", "en" => "Minya"]],
                ['title' => ["ar" => "المنيا الجديدة", "en" => "Minya El Gedida"]],
                ['title' => ["ar" => "العدوة", "en" => "El Adwa"]],
                ['title' => ["ar" => "مغاغة", "en" => "Magagha"]],
                ['title' => ["ar" => "بني مزار", "en" => "Bani Mazar"]],
                ['title' => ["ar" => "مطاي", "en" => "Mattay"]],
                ['title' => ["ar" => "سمالوط", "en" => "Samalut"]],
                ['title' => ["ar" => "المدينة الفكرية", "en" => "Madinat El Fekria"]],
                ['title' => ["ar" => "ملوي", "en" => "Meloy"]],
                ['title' => ["ar" => "دير مواس", "en" => "Deir Mawas"]],
                ['title' => ["ar" => "ابو قرقاص", "en" => "Abu Qurqas"]],
                ['title' => ["ar" => "ارض سلطان", "en" => "Ard Sultan"]],
            ]);

        City::create(['title' => ["ar" => "القليوبية", "en" => "Qaliubiya"]])
            ->areas()->createMany([
                ['title' => ["ar" => "بنها", "en" => "Banha"]],
                ['title' => ["ar" => "قليوب", "en" => "Qalyub"]],
                ['title' => ["ar" => "شبرا الخيمة", "en" => "Shubra Al Khaimah"]],
                ['title' => ["ar" => "القناطر الخيرية", "en" => "Al Qanater Charity"]],
                ['title' => ["ar" => "الخانكة", "en" => "Khanka"]],
                ['title' => ["ar" => "كفر شكر", "en" => "Kafr Shukr"]],
                ['title' => ["ar" => "طوخ", "en" => "Tukh"]],
                ['title' => ["ar" => "قها", "en" => "Qaha"]],
                ['title' => ["ar" => "العبور", "en" => "Obour"]],
                ['title' => ["ar" => "الخصوص", "en" => "Khosous"]],
                ['title' => ["ar" => "شبين القناطر", "en" => "Shibin Al Qanater"]],
                ['title' => ["ar" => "مسطرد", "en" => "Mostorod"]],

            ]);

        City::create(['title' => ["ar" => "الوادي الجديد", "en" => "New Valley"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الخارجة", "en" => "El Kharga"]],
                ['title' => ["ar" => "باريس", "en" => "Paris"]],
                ['title' => ["ar" => "موط", "en" => "Mout"]],
                ['title' => ["ar" => "الفرافرة", "en" => "Farafra"]],
                ['title' => ["ar" => "بلاط", "en" => "Balat"]],
                ['title' => ["ar" => "الداخلة", "en" => "Dakhla"]],

            ]);

        City::create(['title' => ["ar" => "السويس", "en" => "Suez"]])
            ->areas()->createMany([
                ['title' => ["ar" => "السويس", "en" => "Suez"]],
                ['title' => ["ar" => "الجناين", "en" => "Alganayen"]],
                ['title' => ["ar" => "عتاقة", "en" => "Ataqah"]],
                ['title' => ["ar" => "العين السخنة", "en" => "Ain Sokhna"]],
                ['title' => ["ar" => "فيصل", "en" => "Faysal"]],

            ]);

        City::create(['title' => ["ar" => "اسوان", "en" => "Aswan"]])
            ->areas()->createMany([
                ['title' => ["ar" => "أسوان", "en" => "Aswan"]],
                ['title' => ["ar" => "أسوان الجديدة", "en" => "Aswan El Gedida"]],
                ['title' => ["ar" => "دراو", "en" => "Drau"]],
                ['title' => ["ar" => "كوم أمبو", "en" => "Kom Ombo"]],
                ['title' => ["ar" => "نصر النوبة", "en" => "Nasr Al Nuba"]],
                ['title' => ["ar" => "كلابشة", "en" => "Kalabsha"]],
                ['title' => ["ar" => "إدفو", "en" => "Edfu"]],
                ['title' => ["ar" => "الرديسية", "en" => "Al-Radisiyah"]],
                ['title' => ["ar" => "البصيلية", "en" => "Al Basilia"]],
                ['title' => ["ar" => "السباعية", "en" => "Al Sibaeia"]],
                ['title' => ["ar" => "ابوسمبل السياحية", "en" => "Abo Simbl Al Siyahia"]],
                ['title' => ["ar" => "مرسى علم", "en" => "Marsa Alam"]],

            ]);

        City::create(['title' => ["ar" => "اسيوط", "en" => "Assiut"]])
            ->areas()->createMany([
                ['title' => ["ar" => "أسيوط", "en" => "Assiut"]],
                ['title' => ["ar" => "أسيوط الجديدة", "en" => "Assiut El Gedida"]],
                ['title' => ["ar" => "ديروط", "en" => "Dayrout"]],
                ['title' => ["ar" => "منفلوط", "en" => "Manfalut"]],
                ['title' => ["ar" => "القوصية", "en" => "Qusiya"]],
                ['title' => ["ar" => "أبنوب", "en" => "Abnoub"]],
                ['title' => ["ar" => "أبو تيج", "en" => "Abu Tig"]],
                ['title' => ["ar" => "الغنايم", "en" => "El Ghanaim"]],
                ['title' => ["ar" => "ساحل سليم", "en" => "Sahel Selim"]],
                ['title' => ["ar" => "البداري", "en" => "El Badari"]],
                ['title' => ["ar" => "صدفا", "en" => "Sidfa"]],

            ]);

        City::create(['title' => ["ar" => "بني سويف", "en" => "Beni Suef"]])
            ->areas()->createMany([
                ['title' => ["ar" => "بني سويف", "en" => "Bani Sweif"]],
                ['title' => ["ar" => "بني سويف الجديدة", "en" => "Beni Suef El Gedida"]],
                ['title' => ["ar" => "الواسطى", "en" => "Al Wasta"]],
                ['title' => ["ar" => "ناصر", "en" => "Naser"]],
                ['title' => ["ar" => "إهناسيا", "en" => "Ehnasia"]],
                ['title' => ["ar" => "ببا", "en" => "beba"]],
                ['title' => ["ar" => "الفشن", "en" => "Fashn"]],
                ['title' => ["ar" => "سمسطا", "en" => "Somasta"]],
                ['title' => ["ar" => "الاباصيرى", "en" => "Alabbaseri"]],
                ['title' => ["ar" => "مقبل", "en" => "Mokbel"]],

            ]);

        City::create(['title' => ["ar" => "بورسعيد", "en" => "Port Said"]])
            ->areas()->createMany([
                ['title' => ["ar" => "بورسعيد", "en" => "PorSaid"]],
                ['title' => ["ar" => "بورفؤاد", "en" => "Port Fouad"]],
                ['title' => ["ar" => "العرب", "en" => "Alarab"]],
                ['title' => ["ar" => "حى الزهور", "en" => "Zohour"]],
                ['title' => ["ar" => "حى الشرق", "en" => "Alsharq"]],
                ['title' => ["ar" => "حى الضواحى", "en" => "Aldawahi"]],
                ['title' => ["ar" => "حى المناخ", "en" => "Almanakh"]],
                ['title' => ["ar" => "حى مبارك", "en" => "Mubarak"]],

            ]);

        City::create(['title' => ["ar" => "دمياط", "en" => "Damietta"]])
            ->areas()->createMany([
                ['title' => ["ar" => "دمياط", "en" => "Damietta"]],
                ['title' => ["ar" => "دمياط الجديدة", "en" => "New Damietta"]],
                ['title' => ["ar" => "رأس البر", "en" => "Ras El Bar"]],
                ['title' => ["ar" => "فارسكور", "en" => "Faraskour"]],
                ['title' => ["ar" => "الزرقا", "en" => "Zarqa"]],
                ['title' => ["ar" => "السرو", "en" => "alsaru"]],
                ['title' => ["ar" => "الروضة", "en" => "alruwda"]],
                ['title' => ["ar" => "كفر البطيخ", "en" => "Kafr El-Batikh"]],
                ['title' => ["ar" => "عزبة البرج", "en" => "Azbet Al Burg"]],
                ['title' => ["ar" => "ميت أبو غالب", "en" => "Meet Abou Ghalib"]],
                ['title' => ["ar" => "كفر سعد", "en" => "Kafr Saad"]],

            ]);

        City::create(['title' => ["ar" => "الشرقية", "en" => "Sharkia"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الزقازيق", "en" => "Zagazig"]],
                ['title' => ["ar" => "العاشر من رمضان", "en" => "Al Ashr Men Ramadan"]],
                ['title' => ["ar" => "منيا القمح", "en" => "Minya Al Qamh"]],
                ['title' => ["ar" => "بلبيس", "en" => "Belbeis"]],
                ['title' => ["ar" => "مشتول السوق", "en" => "Mashtoul El Souq"]],
                ['title' => ["ar" => "القنايات", "en" => "Qenaiat"]],
                ['title' => ["ar" => "أبو حماد", "en" => "Abu Hammad"]],
                ['title' => ["ar" => "القرين", "en" => "El Qurain"]],
                ['title' => ["ar" => "ههيا", "en" => "Hehia"]],
                ['title' => ["ar" => "أبو كبير", "en" => "Abu Kabir"]],
                ['title' => ["ar" => "فاقوس", "en" => "Faccus"]],
                ['title' => ["ar" => "الصالحية الجديدة", "en" => "El Salihia El Gedida"]],
                ['title' => ["ar" => "الإبراهيمية", "en" => "Al Ibrahimiyah"]],
                ['title' => ["ar" => "ديرب نجم", "en" => "Deirb Negm"]],
                ['title' => ["ar" => "كفر صقر", "en" => "Kafr Saqr"]],
                ['title' => ["ar" => "أولاد صقر", "en" => "Awlad Saqr"]],
                ['title' => ["ar" => "الحسينية", "en" => "Husseiniya"]],
                ['title' => ["ar" => "صان الحجر القبلية", "en" => "san alhajar alqablia"]],
                ['title' => ["ar" => "منشأة أبو عمر", "en" => "Manshayat Abu Omar"]],

            ]);

        City::create(['title' => ["ar" => "جنوب سيناء", "en" => "South Sinai"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الطور", "en" => "Al Toor"]],
                ['title' => ["ar" => "شرم الشيخ", "en" => "Sharm El-Shaikh"]],
                ['title' => ["ar" => "دهب", "en" => "Dahab"]],
                ['title' => ["ar" => "نويبع", "en" => "Nuweiba"]],
                ['title' => ["ar" => "طابا", "en" => "Taba"]],
                ['title' => ["ar" => "سانت كاترين", "en" => "Saint Catherine"]],
                ['title' => ["ar" => "أبو رديس", "en" => "Abu Redis"]],
                ['title' => ["ar" => "أبو زنيمة", "en" => "Abu Zenaima"]],
                ['title' => ["ar" => "رأس سدر", "en" => "Ras Sidr"]],

            ]);

        City::create(['title' => ["ar" => "كفر الشيخ", "en" => "Kafr Al sheikh"]])
            ->areas()->createMany([
                ['title' => ["ar" => "كفر الشيخ", "en" => "Kafr El Sheikh"]],
                ['title' => ["ar" => "وسط البلد كفر الشيخ", "en" => "Kafr El Sheikh Downtown"]],
                ['title' => ["ar" => "دسوق", "en" => "Desouq"]],
                ['title' => ["ar" => "فوه", "en" => "Fooh"]],
                ['title' => ["ar" => "مطوبس", "en" => "Metobas"]],
                ['title' => ["ar" => "برج البرلس", "en" => "Burg Al Burullus"]],
                ['title' => ["ar" => "بلطيم", "en" => "Baltim"]],
                ['title' => ["ar" => "مصيف بلطيم", "en" => "Masief Baltim"]],
                ['title' => ["ar" => "الحامول", "en" => "Hamol"]],
                ['title' => ["ar" => "بيلا", "en" => "Bella"]],
                ['title' => ["ar" => "الرياض", "en" => "Riyadh"]],
                ['title' => ["ar" => "سيدي سالم", "en" => "Sidi Salm"]],
                ['title' => ["ar" => "قلين", "en" => "Qellen"]],
                ['title' => ["ar" => "سيدي غازي", "en" => "Sidi Ghazi"]],

            ]);

        City::create(['title' => ["ar" => "مطروح", "en" => "Matrouh"]])
            ->areas()->createMany([
                ['title' => ["ar" => "مرسى مطروح", "en" => "Marsa Matrouh"]],
                ['title' => ["ar" => "الحمام", "en" => "El Hamam"]],
                ['title' => ["ar" => "العلمين", "en" => "Alamein"]],
                ['title' => ["ar" => "الضبعة", "en" => "Dabaa"]],
                ['title' => ["ar" => "النجيلة", "en" => "Al-Nagila"]],
                ['title' => ["ar" => "سيدي براني", "en" => "Sidi Brani"]],
                ['title' => ["ar" => "السلوم", "en" => "Salloum"]],
                ['title' => ["ar" => "سيوة", "en" => "Siwa"]],
                ['title' => ["ar" => "مارينا", "en" => "Marina"]],
                ['title' => ["ar" => "الساحل الشمالى", "en" => "North Coast"]],

            ]);

        City::create(['title' => ["ar" => "الأقصر", "en" => "Luxor"]])
            ->areas()->createMany([
                ['title' => ["ar" => "الأقصر", "en" => "Luxor"]],
                ['title' => ["ar" => "الأقصر الجديدة", "en" => "New Luxor"]],
                ['title' => ["ar" => "إسنا", "en" => "Esna"]],
                ['title' => ["ar" => "طيبة الجديدة", "en" => "New Tiba"]],
                ['title' => ["ar" => "الزينية", "en" => "Al ziynia"]],
                ['title' => ["ar" => "البياضية", "en" => "Al Bayadieh"]],
                ['title' => ["ar" => "القرنة", "en" => "Al Qarna"]],
                ['title' => ["ar" => "أرمنت", "en" => "Armant"]],
                ['title' => ["ar" => "الطود", "en" => "Al Tud"]],

            ]);

        City::create(['title' => ["ar" => "قنا", "en" => "Qena"]])
            ->areas()->createMany([
                ['title' => ["ar" => "قنا", "en" => "Qena"]],
                ['title' => ["ar" => "قنا الجديدة", "en" => "New Qena"]],
                ['title' => ["ar" => "ابو طشت", "en" => "Abu Tesht"]],
                ['title' => ["ar" => "نجع حمادي", "en" => "Nag Hammadi"]],
                ['title' => ["ar" => "دشنا", "en" => "Deshna"]],
                ['title' => ["ar" => "الوقف", "en" => "Alwaqf"]],
                ['title' => ["ar" => "قفط", "en" => "Qaft"]],
                ['title' => ["ar" => "نقادة", "en" => "Naqada"]],
                ['title' => ["ar" => "فرشوط", "en" => "Farshout"]],
                ['title' => ["ar" => "قوص", "en" => "Quos"]],

            ]);

        City::create(['title' => ["ar" => "شمال سيناء", "en" => "North Sinai"]])
            ->areas()->createMany([
                ['title' => ["ar" => "العريش", "en" => "Arish"]],
                ['title' => ["ar" => "الشيخ زويد", "en" => "Sheikh Zowaid"]],
                ['title' => ["ar" => "نخل", "en" => "Nakhl"]],
                ['title' => ["ar" => "رفح", "en" => "Rafah"]],
                ['title' => ["ar" => "بئر العبد", "en" => "Bir al-Abed"]],
                ['title' => ["ar" => "الحسنة", "en" => "Al Hasana"]],

            ]);

        City::create(['title' => ["ar" => "سوهاج", "en" => "Sohag"]])
            ->areas()->createMany([
                ['title' => ["ar" => "سوهاج", "en" => "Sohag"]],
                ['title' => ["ar" => "سوهاج الجديدة", "en" => "Sohag El Gedida"]],
                ['title' => ["ar" => "أخميم", "en" => "Akhmeem"]],
                ['title' => ["ar" => "أخميم الجديدة", "en" => "Akhmim El Gedida"]],
                ['title' => ["ar" => "البلينا", "en" => "Albalina"]],
                ['title' => ["ar" => "المراغة", "en" => "El Maragha"]],
                ['title' => ["ar" => "المنشأة", "en" => "almunsha'a"]],
                ['title' => ["ar" => "دار السلام", "en" => "Dar AISalaam"]],
                ['title' => ["ar" => "جرجا", "en" => "Gerga"]],
                ['title' => ["ar" => "جهينة الغربية", "en" => "Jahina Al Gharbia"]],
                ['title' => ["ar" => "ساقلته", "en" => "Saqilatuh"]],
                ['title' => ["ar" => "طما", "en" => "Tama"]],
                ['title' => ["ar" => "طهطا", "en" => "Tahta"]],
                ['title' => ["ar" => "الكوثر", "en" => "Alkawthar"]],

            ]);
    }
}
