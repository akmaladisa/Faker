<?php

namespace Faker\Provider\th_TH;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = [
        'เมือง', 'หมู่บ้าน', 'ท่า',
    ];

    protected static $citySuffix = [
        'เหนือ', 'ใต้', 'บุรี',
    ];

    protected static $buildingNumber = [
        '#####', '####', '###', '##', '##/###',
    ];

    protected static $streetPrefix = [
        'ซอย', 'ถนน', 'สะพาน', 'วงเวียน', 'แยก',
    ];

    protected static $streetSuffix  = [
        'กรุงเกษม', 'กรุงเทพกรีฑา', 'กรุงเทพ-นนทบุรี', 'กรุงธนบุรี', 'กรุงแมน', 'กล้วยน้ำไทตัดใหม่', 'กลันตัน', 'กะออม', 'กระออม', 'กัลปพฤกษ์', 'กัลยาณไมตรี', 'กาญจนาภิเษก', 'กำนันแม้น', 'กำแพงเพชร', 'กำแพงเพชร 1', 'กำแพงเพชร 2', 'กำแพงเพชร 3', 'กำแพงเพชร 4', 'กำแพงเพชร 5', 'กำแพงเพชร 6', 'กำแพงเพชร 7', 'กิ่งแก้ว', 'กิจพานิช', 'เกษมราษฎร์', 'แก้ว', 'แก้วเงินทอง', 'โกสุมรวมใจ', 'ไกรสีห์',
        'ขวัญ', 'ขาว', 'ข้าวสาร', 'ข้าวหลาม', 'ขุมทอง-ลำต้อยติ่ง', 'เขียวไข่กา',
        'ครุใน', 'คลองเก้า', 'คลองถมวัดพิเรนทร์', 'คลองถมวัดสระเกศ', 'คลองถมวัดโสมนัส', 'คลองลำเจียก', 'คลองลำปัก', 'คลองสิบ-คลองสิบสี่', 'คอนแวนต์', 'คุ้มเกล้า', 'คู้บอน', 'คู้-คลองสิบ', 'เคหะร่มเกล้า',
        'งามวงศ์วาน', 'จตุโชติ', 'จรัญสนิทวงศ์', 'จรัสเมือง', 'จรัสเวียง', 'จรูญเวียง', 'จอมทอง', 'จอมทองบูรณะ', 'จักรพงษ์', 'จักรพรรดิพงษ์', 'จักรเพชร', 'จักรวรรดิ', 'จันทน์', 'จันทน์เก่า', 'จันทรุเบกษา', 'จารุเมือง', 'จึงเจริญพาณิชย์', 'เจริญกรุง', 'เจริญนคร', 'เจริญพัฒนา', 'เจริญเมือง', 'เจริญรัถ', 'เจริญราษฎร์', 'เจริญเวียง', 'เจ้าคำรพ', 'เจ้าคำรบ', 'เจ้าคุณทหาร', 'เจ้าพระยาสยาม', 'เจ้าฟ้า', 'แจ้งวัฒนะ',
        'ฉลองกรุง', 'ฉิมพลี', 'เฉลิมเขต 1', 'เฉลิมเขต 2', 'เฉลิมเขต 3', 'เฉลิมเขต 4', 'เฉลิมพงษ์', 'เฉลิมพระเกียรติ ร.9', 'แฉล้มนิมิตร',
        'ชักพระ', 'ชัยพฤกษ์', 'ช่างอากาศอุทิศ', 'ชิดลม', 'เชตุพน', 'เชิดวุฒากาศ', 'เชียงใหม่', 'เชื้อเพลิง', 'เชื่อมคลองมอญ', 'เชื่อมสัมพันธ์', 'โชคชัย 4',
        'ณ ระนอง',
        'ดวงพิทักษ์', 'ดาวข่าง', 'ดำรงรักษ์', 'ดินแดง', 'ดินแดง 1', 'ดินสอ', 'ดิสมาร์ค', 'เดชะตุงคะ', 'เดโช',
        'ตรีเพชร', 'ตรีมิตร', 'ตะนาว', 'ตานี', 'ตีทอง', 'เตชะวณิช',
        'ทรงวาด', 'ทรงสวัสดิ์', 'ทรงเสริม', 'ทรัพย์', 'ทรัพย์สิน', 'ทวีวัฒนา', 'ทวีวัฒนา-กาญจนาภิเษก', 'ทหาร', 'ทหารอากาศอุทิศ', 'ทับยาว', 'ท่าเกษม', 'ท่าข้าม', 'ทางรถไฟสายเก่าปากน้ำ', 'ท่าดินแดง', 'ท้ายวัง', 'ทุ่งมังกร', 'เทศบาลนฤมาณ', 'เทศบาลนิมิตใต้', 'เทศบาลนิมิตเหนือ', 'เทศบาลรังรักษ์ใต้', 'เทศบาลรังรักษ์เหนือ', 'เทศบาลรังสรรใต้', 'เทศบาลรังสรรเหนือ', 'เทศบาลรังสฤษดิ์ใต้', 'เทศบาลรังสฤษดิ์เหนือ', 'เทศบาลสงเคราะห์', 'เทอดดำริ', 'เทอดไท', 'เทิดราชัน', 'เทียมร่วมมิตร', 'ไทยรามัญ',
        'ธนิยะ',
        'นครไชยศรี', 'นครปฐม', 'นครราชสีมา', 'นครลุง', 'นครสวรรค์', 'นนทรี', 'นราธิวาสราชนครินทร์', 'นเรศ', 'นวมินทร์', 'นวลจันทร์', 'นักกีฬาแหลมทอง', 'นาคนิวาส', 'นาคราช', 'นางลิ้นจี่', 'นาวงประชาพัฒนา', 'นิคมมักกะสัน', 'นิมิตใหม่', 'นิลเหมนิยม', 'นี้จงสวัสดิ์',
        'บรมราชชนนี', 'บรรทัดทอง', 'บริพัตร', 'บวรนิเวศน์', 'บางกระดี่', 'บางขุนเทียน', 'บางขุนเทียน-ชายทะเล', 'บางขุนนนท์', 'บางแค', 'บางเชือกหนัง', 'บางนา-ตราด', 'บางบอน 1', 'บางบอน 2', 'บางบอน 3', 'บางบอน 4', 'บางบอน 5', 'บางบอนสายเดิม', 'บางไผ่', 'บางพรม', 'บางระมาด', 'บางแวก', 'บ้านหม้อ', 'บำรุงเมือง', 'บึงขวาง', 'บุญศิริ', 'บุรีภิรมย์', 'บูรณศาสตร์', 'บูรพา', 'แบนชะโด', 'แบรสต์',
        'ประชาชื่น', 'ประชาทร', 'ประชาธิปก', 'ประชาธิปไตย', 'ประชาพัฒนา', 'ประชาร่วมใจ', 'ประชาราษฎร์ สาย 1', 'ประชาราษฎร์ สาย 2', 'ประชาราษฎร์บำเพ็ญ', 'ประชาสงเคราะห์', 'ประชาสำราญ', 'ประชาสุข', 'ประชาอุทิศ', 'ประดิพัทธิ์', 'ประดิษฐ์มนูธรรม', 'ประมวญ', 'ประเสริฐมนูกิจ', 'ปรินายก', 'ปั้น', 'ปากน้ำกระโจมทอง', 'ปากน้ำฝั่งเหนือ', 'แปลงนาม',
        'ผดุงด้าว', 'ผดุงพันธ์',
        'พญาไท', 'พญาไม้', 'พรหมราษฎร์', 'พระจันทร์', 'พระพิทักษ์', 'พระพิพิธ', 'พระยาสุเรนทร์', 'พระราม 1', 'พระราม 2', 'พระราม 3', 'พระราม 4', 'พระราม 5', 'พระราม 6', 'พระราม 9', 'พระสุเมรุ', 'พระอาทิตย์', 'พรานนก', 'พลับพลาไชย', 'พ่วงศิริ', 'พหลโยธิน', 'พะเนียง', 'พัฒน์พงศ์', 'พัฒนา', 'พัฒนาการ', 'พัฒนาชนบท', 'พัฒนาชนบท 2', 'พัฒนาชนบท 3', 'พัฒนาชนบท 4', 'พาณิชยการธนบุรี', 'พาดสาย', 'พาหุรัด', 'พิชัย', 'พิบูลสงคราม', 'พิษณุโลก', 'พีรพงษ์', 'พุทธบูชา', 'พุทธมณฑล สาย 1', 'พุทธมณฑล สาย 2', 'พุทธมณฑล สาย 3', 'เพชรเกษม', 'เพชรบุรี', 'เพชรพระราม', 'เพชรอุทัย', 'เพลินจิต', 'เพาะพานิชย์', 'เพิ่มสิน', 'แพร่งนรา', 'แพร่งภูธร', 'แพร่งสรรพศาสตร์', 'โพธิ์แก้ว',
        'เฟื่องนคร',
        'ภาณุรังษี', 'ภุชงค์', 'โภคี',
        'มหรรณพ', 'มหาจักร', 'มหาไชย', 'มหานคร', 'มหาพฤฒาราม', 'มหาราช', 'มหาเศรษฐ์', 'มเหสักข์', 'มไหสวรรย์', 'มอเตอร์เวย์', 'มังกร', 'มาเจริญ', 'มิตรพันธ์', 'มิตรภาพไทย-จีน', 'มิตรไมตรี', 'มิตรไมตรี 1', 'มิตรไมตรี 2', 'มิตรไมตรี 3', 'มีนพัฒนา', 'แมนไท', 'ไมตรีจิต',
        'ยมราชสุขุม', 'ยังพัธนา', 'ยานนาวา', 'ยี่สิบสองกรกฎาคม 1', 'ยี่สิบสองกรกฎาคม 2', 'ยี่สิบสองกรกฎาคม 3', 'ยี่สิบสองกรกฎาคม 4', 'ยี่สิบสองกรกฎาคม 5', 'ยุคล 1', 'ยุคล 2', 'เย็นจิต', 'เย็นอากาศ', 'เยาวพานิชย์', 'เยาวราช', 'แยกสวนสยาม', 'โยธา', 'โยธา 1', 'โยธินพัฒนา', 'โยธี',
        'ร่มเกล้า', 'ร่วมจิตต์', 'ร่วมพัฒนา', 'รองเมือง', 'ระนอง 1', 'ระนอง 2', 'รัชดาภิเษก', 'รัชดา-รามอินทรา', 'รัชมงคลประสาธน์', 'รางน้ำ', 'ราชดำเนินกลาง', 'ราชดำเนินนอก', 'ราชดำเนินใน', 'ราชดำริ', 'ราชบพิธ', 'ราชปรารภ', 'ราชพฤกษ์', 'ราชมนตรี', 'ราชวงศ์', 'ราชวิถี', 'ราชินี', 'รามคำแหง', 'รามคำแหง 2', 'รามบุตรี', 'รามอินทรา', 'ราษฎร์นิมิตร', 'ราษฎร์บูรณะ', 'ราษฎร์พัฒนา', 'ราษฎร์ร่วมใจ', 'ราษฎร์รัฐพัฒนา', 'ราษฎร์อุทิศ', 'ริมคลองประปาฝั่งขวา', 'ริมคลองประปาฝั่งซ้าย', 'รุ่งประชา',
        'ลงท่า', 'ลาซาล', 'ลาซาล-แบริ่ง', 'ลาดกระบัง', 'ลาดปลาเค้า', 'ลาดพร้าว', 'ลาดพร้าววังหิน', 'ลาดหญ้า', 'ลำไทร', 'ลำพูนไชย', 'ลำมะเขือขื่น', 'ลิขิต', 'ลูกหลวง', 'เลียบคลองเนินทราย', 'เลียบคลองบางพรม', 'เลียบคลองปทุม', 'เลียบคลองผดุงกรุงเกษม', 'เลียบคลองพิทยาลงกรณ์', 'เลียบคลองภาษีเจริญฝั่งใต้', 'เลียบคลองภาษีเจริญฝั่งเหนือ', 'เลียบคลองมอญ', 'เลียบคลองลำกอไผ่', 'เลียบคลองสอง', 'เลียบคลองสิบสามฝั่งตะวันตก', 'เลียบคลองสิบสามฝั่งตะวันออก', 'เลียบทะเลสาบ', 'เลียบวารี',
        'วงศ์สว่าง', 'วรจักร', 'วังเจ้าสาย', 'วังเดิม', 'วังหลัง', 'วัชรพล', 'วัฒนธรรม', 'วัดเวฬุวนาราม', 'วัดสุขใจ', 'วัดใหม่เจริญราษฎร์', 'วิทยุ', 'วิบูลย์สาธุกิจ', 'วิบูลย์สาธุกิจ', 'วิวัฒน์เวียง', 'วิสุทธิกษัตริย์', 'วุฒากาศ',
        'ศรีธรรมาธิราช', 'ศรีนครินทร์', 'ศรีบูรพา', 'ศรีวรา', 'ศรีเวียง', 'ศรีอยุธยา', 'ศาลาแดง', 'ศาลาธรรมสพน์', 'ศิริเกษม', 'ศิริพงษ์', 'ศุภมิตร', 'เศรษฐศิริ', 'เศรษฐศิริ 2', 'สกุลดี',
        'สตรีวิทยา 2', 'สนามไชย', 'สมเด็จเจ้าพระยา', 'สมเด็จพระเจ้าตากสิน', 'สมเด็จพระปิ่นเกล้า', 'สรงประภา', 'สรณคมน์', 'สรรพาวุธ', 'สราญรมย์', 'สวนผัก', 'สวนพลู', 'สวนสยาม', 'สวนอ้อยซอยกลาง', 'สวรรคโลก', 'สวัสดิการ 1', 'สวัสดิการ 2', 'สวัสดิการ 3', 'สว่าง', 'สะแกงาม', 'สะพานพุทธ', 'สังคมสงเคราะห์', 'สังคโลก', 'สังฆประชา', 'สังฆสันติสุข', 'สันติภาพ', 'สาทรใต้', 'สาทรเหนือ', 'สาธุประดิษฐ์', 'สามวา', 'สามเสน', 'สายไหม', 'สารสิน', 'สารีบุตร', 'สารีบุตร-ทับยาว', 'สาลีรัฐวิภาค', 'สิบสามห้าง', 'สิรินธร', 'สี่พระยา', 'สีลม', 'สีหบุรานุกิจ', 'สุขสวัสดิ์', 'สุขาภิบาล 2', 'สุขาภิบาล 5', 'สุขาภิบาลบางระมาด', 'สุขุมวิท', 'สุโขทัย', 'สุคนธสวัสดิ์', 'สุคันธาราม', 'สุดประเสริฐ', 'สุทธาวาส', 'สุทธิสารวินิจฉัย', 'สุนทรโกษา', 'สุพรรณ', 'สุรวงศ์', 'สุรศักดิ์', 'สุวินทวงศ์', 'สุเหร่าคลองหนึ่ง', 'เสนานิคม 1', 'เสรีไทย', 'เสือป่า', 'แสนเกษม', 'แสมดำ',
        'หทัยมิตร', 'หทัยราษฎร์', 'หนองแขม-วัดศรีนวล', 'หนองระแหง', 'หน้าพระธาตุ', 'หน้าพระลาน', 'หน้าหับเผย', 'หม่อมเจ้าสง่างาม สุประดิษฐ์', 'หมู่บ้านเศรษฐกิจ', 'หลวง', 'หลวงพรตพิทยพยัต', 'หลวงแพ่ง', 'หลักเมือง', 'หลังสวน', 'หลานหลวง', 'หอวัง', 'หัวหมาก',
        'อนันตนาค', 'อนามัยงามเจริญ', 'อนุวงศ์', 'อยู่เย็น', 'อยู่วิทยา', 'อรุณอมรินทร์', 'อโศก-ดินแดง', 'อโศกมนตรี', 'อ่อนนุช', 'อังรีดูนังต์', 'อัศวพิเชษฐ์', 'อัษฎางค์', 'อัสสัมชัญ', 'อาจณรงค์', 'อำนวยสงคราม', 'อินทรพิทักษ์', 'อินทราวาส', 'อิสรภาพ', 'อุณากรรณ', 'อุดมสุข', 'อุทยาน', 'อู่ทองนอก', 'อู่ทองใน', 'เอกชัย',
        '60 พรรษามหาราชินี'
    ];

    protected static $postcode = ['#####'];

    /**
     * @var array Thai province names
     * @link https://th.wikipedia.org/wiki/%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static $province = [
        'กระบี่', 'กรุงเทพมหานคร', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร', 'ขอนแก่น',
        'จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร',
        'ตรัง', 'ตราด', 'ตาก', 'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา',
        'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 'นราธิวาส', 'น่าน',
        'บึงกาฬ', 'บุรีรัมย์', 'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี',
        'พระนครศรีอยุธยา', 'พะเยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 'ภูเก็ต',
        'มหาสารคาม', 'มุกดาหาร', 'ยะลา', 'ยโสธร', 'ระนอง', 'ระยอง', 'ราชบุรี', 'ร้อยเอ็ด',
        'ลพบุรี', 'ลำปาง', 'ลำพูน', 'ศรีสะเกษ', 'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม',
        'สมุทรสาคร', 'สระบุรี', 'สระแก้ว', 'สิงห์บุรี', 'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์', 'สุโขทัย',
        'หนองคาย', 'หนองบัวลำภู', 'อำนาจเจริญ', 'อุดรธานี', 'อุตรดิตถ์', 'อุทัยธานี', 'อุบลราชธานี', 'อ่างทอง',
        'เชียงราย', 'เชียงใหม่', 'เพชรบุรี', 'เพชรบูรณ์', 'เลย', 'แพร่', 'แม่ฮ่องสอน',
    ];

    /**
     * @var array Country names in Thai
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8_%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B9%81%E0%B8%94%E0%B8%99_%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87
     */
    protected static $country = [
        'กรีซ', 'กัมพูชา', 'กัวเตมาลา', 'กาตาร์', 'คอซอวอ', 'คาซัคสถาน', 'คิริบาส', 'คิวบา', 'คีร์กีซสถาน', 'คูเวต',
        'จอร์เจีย', 'จอร์แดน', 'จาเมกา', 'จีน','ชิลี', 'ซานมารีโน', 'ซามัว', 'ซาอุดีอาระเบีย', 'ซีเรีย', 'ซูรินาม',
        'ญี่ปุ่น', 'ดอมินีกา', 'ตรินิแดดและโตเบโก', 'ตองกา', 'ติมอร์-เลสเต', 'ตุรกี', 'ตูวาลู', 'ทาจิกิสถาน',
        'นครรัฐวาติกัน', 'นอร์เวย์', 'นาอูรู', 'นิการากัว', 'นิวซีแลนด์', 'บราซิล', 'บรูไนดารุสซาลาม', 'บอสเนียและเฮอร์เซโกวีนา',
        'บังกลาเทศ', 'บัลแกเรีย', 'บาร์เบโดส', 'บาห์เรน', 'บาฮามาส', 'ปากีสถาน', 'ปานามา', 'ปาปัวนิวกินี', 'ปารากวัย', 'ปาเลา',
        'ฝรั่งเศส', 'พม่า', 'ฟิจิ', 'ฟินแลนด์', 'ฟิลิปปินส์', 'ภูฏาน', 'มองโกเลีย', 'มอนเตเนโกร', 'มอลตา','มอลโดวา', 'มัลดีฟส์', 'มาเลเซีย',
        'ยูเครน', 'รัสเซีย', 'ลักเซมเบิร์ก', 'ลัตเวีย', 'ลาว', 'ลิกเตนสไตน์','ลิทัวเนีย', 'ศรีลังกา',
        'สวิตเซอร์แลนด์', 'สวีเดน', 'สหรัฐอาหรับเอมิเรตส์', 'สหรัฐอเมริกา', 'สหราชอาณาจักร', 'สาธารณรัฐมาซิโดเนีย', 'สาธารณรัฐเช็ก', 'สาธารณรัฐโดมินิกัน',
        'สิงคโปร์', 'สเปน', 'สโลวาเกีย', 'สโลวีเนีย', 'หมู่เกาะมาร์แชลล์', 'หมู่เกาะโซโลมอน',
        'ออสเตรีย', 'ออสเตรเลีย', 'อันดอร์รา', 'อัฟกานิสถาน', 'อาร์มีเนีย', 'อาร์เจนตินา', 'อาเซอร์ไบจาน',
        'อิตาลี', 'อินเดีย', 'อินโดนีเซีย', 'อิรัก', 'อิสราเอล', 'อิหร่าน', 'อุซเบกิสถาน', 'อุรุกวัย', 'ฮอนดูรัส', 'ฮังการี',
        'เกรเนดา', 'เกาหลีเหนือ', 'เกาหลีใต้', 'เซนต์คิตส์และเนวิส', 'เซนต์ลูเซีย', 'เซนต์วินเซนต์และเกรนาดีนส์', 'เซอร์เบีย',
        'เดนมาร์ก', 'เติร์กเมนิสถาน', 'เนปาล', 'เนเธอร์แลนด์', 'เบลารุส', 'เบลีซ', 'เบลเยียม', 'เปรู', 'เม็กซิโก',
        'เยอรมนี', 'เยเมน', 'เลบานอน', 'เวียดนาม', 'เวเนซุเอลา', 'เอกวาดอร์', 'เอลซัลวาดอร์', 'เอสโตเนีย', 'เฮติ',  'แคนาดา',
        'แอนติกาและบาร์บูดา', 'แอลเบเนีย', 'โครเอเชีย', 'โคลอมเบีย', 'โบลิเวีย', 'โปรตุเกส', 'โปแลนด์', 'โมนาโก', 'โรมาเนีย',
        'โอมาน', 'ไซปรัส', 'ไทย', 'ไมโครนีเซีย', 'ไอซ์แลนด์', 'ไอร์แลนด์',
    ];

    protected static $cityFormats = [
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    ];

    protected static $streetNameFormats = [
        '{{streetPrefix}} {{streetSuffix}}'
    ];

    protected static $streetAddressFormats = [
        '{{buildingNumber}} {{streetName}}',
    ];

    protected static $addressFormats = [
        "{{streetAddress}}\n{{city}}, {{postcode}}",
    ];

    /**
     * @example 'เมือง'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

     /**
     * @example 'ถนน'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'กรุงเทพมหานคร'
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }
}
