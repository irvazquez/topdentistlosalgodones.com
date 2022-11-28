<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        $text_center = [
            (object) [
                'class' => null,
                'title' => null,
                'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">Even with insurance, major dental work costs way too much. But it doesn’t have to! We offer an innovative, cost-effective alternative. Our specialty dentists deliver US-quality care in Mexico at a fraction of the cost — 50-70% off. Finally, superior dental care you can afford!
                        <br />
                        It’s your money, your appearance and your health at stake. So how do you find a dentist you can really trust? We choose only the top ranking dental professionals for our network. We continue to screen our dentists based on client feedback. And, your work is Guaranteed.
                            <br />
                            <br />
                        We’ve done the hard work for you. topdentistslosalgodones Network includes only the most respected specialists in Los Algodones, Mexico.
                            <br />
                            <br />
                        Our strict qualification guidelines include years of experience, advanced training, and track record providing successful treatments. Likewise, each Mexico dental facility is credentialed for A.D.A. safety and infection control practices.
                    </p>',
            ],
            (object) [
                'class' => null,
                'title' => null,
                'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">
                        We understand that knowing the cost is important to your decision. Call us and we can help you analyze your savings in one call. Need a personalized estimate? Send us your X-rays. Your Professional Advisor will coordinate with the dentist to create a pre-evaluation treatment plan with actual cost and steps.
                    </p>',
            ],
        ];

        $expertise = (object) [
            'heading' => 'Our Expertise',
            'items' => [
                (object) [
                    'icon' => 'ti ti-direction',
                    'title' => 'Tracking Dental Case',
                    'text' => 'We track your dental case from start to finish. If you have questions, your customer service representative is just a phone call away.',
                ],
                (object) [
                    'icon' => 'ti ti-money',
                    'title' => 'Prices',
                    'text' => '<a href="/" hreflang="en">topdentistslosalgodones.com</a> gives you preferred pricing on dentists’ normal rates, so you can be confident you’re getting the best care – for the best price.',
                ],
                (object) [
                    'icon' => 'fa fa-certificate',
                    'title' => 'Experience',
                    'text' => 'Your health investment is important to us. We require all dentists in our Network offer a 5-year Guarantee.',
                ],
                (object) [
                    'icon' => 'ti ti-pencil-alt',
                    'title' => 'Pre-evaluation',
                    'text' => 'Know the cost and steps with an x-ray pre-evaluation.',
                ],
            ],
        ];
        return view('home', ['expertise' => $expertise, 'text_center' => $text_center]);
    }

    public function whatIsLosAlgodones()
    {
        $text_center = [
            (object) [
                'class' => null,
                'title' => 'What is Los Algodones, Mexico?',
                'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">
                    Algodones, Mexico, is a popular border town destination for medical tourism for residents of the United States and Canada, offering more pharmacies, doctors, dentists, and opticians in a concentrated area than anywhere else in the world. Here, Americans and Canadians can find heavily discounted prescriptions, eyeglasses, and medical and dental care, each as high quality as the same procedure or service back home. Algodones is located seven miles south of ​Yuma, Arizona off Interstate 8, but you will be crossing the border at Andrade, California to access this small Mexican town located in the state of Baja California. Open daily from 8 a.m. to 10 p.m., travelers can cross the Andrade border station either on foot or in their car, and parking lots are available for a low fee from Native American tribe members who own lots in the area.
                </p>',
            ],
            (object) [
                'class' => null,
                'title' => null,
                'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">
                    If you are concerned about the hygiene standards of a foreign dental clinic, good dentists in Los Algodones follows with no problem at all the US standards approved by FDA and American Dental Association, this includes all their tools and instruments and equally important their practice, you can rest assure that they sterilize all their equipment and use new gloves each time they work, we recommend to don’t feel afraid to ask your dentist about the subject.
                </p>',
            ],
            (object) [
                'class' => null,
                'title' => null,
                'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">
                    Our Dentists in Mexico have international certifications. At the same time, the quality of our materials are just as good as in the States or Canada, due to having the same providers and brands.
                </p>',
            ],
        ];

        $right_imagen = [
            (object) [
                'class' => 'bg-dark',
                'image' => asset('img/choose-los-algodones.jpg'),
                'content' => '<h3 spellcheck="false" data-ms-editor="true">Why choose a dentist in Los Algodones, Mexico?</h3>
                    <p class="mb0" spellcheck="false" data-ms-editor="true">
                        First of all the location, this town at the border of the US as we mentioned before is conveniently near to Yuma in Arizona, from there it’s just seven miles or less than ten minutes of walking, and after that you’ll be impressed to see the numerous dentists in Los Algodones, with offices and clinics side by side, so you’ll get to compare prices and decide for the specialist of your choice. See our Los Algodones dentist price list.
                        <br />
                        <br />
                        Communication also plays a crucial part between the dentist and the client relationship, and Los Algodones dentists are not the exception, you don’t have to feel discouraged that they don’t speak fluent English, because not only they do speak the language, but also the receptionist and the majority staff of the dental clinics can communicate very well with their patients, this comes due to the fact that most of their clients comes from Canada and the United States.
                        <br />
                    </p>',
            ],
        ];

        $left_imagen = [
            (object) [
                'class' => 'bg-dark',
                'image' => asset('img/bank-notes.jpg'),
                'content' => '<h3 spellcheck="false" data-ms-editor="true">How much are the prices of Los Algodones, Mexico dentists?&nbsp;<br /></h3>
                    <p class="mb0" spellcheck="false" data-ms-editor="true">
                        In a short answer, very cheap compared to the States, the range of savings you can gain from opting for a dentist in Los Algodones goes from a little more than 50% to 70 or even 80%, so it is really a nice deal if you want to do yourself some dental tourism.
                        <br />
                        <br />
                        Just so you can get an idea, some dental clinics in Los Algodones, Mexico don’t charge anything at all for a consultation, and in the US you can get to spend 90 dollars, saving 100% on the service. Another similar case is the single tooth x-ray, they are free in some dentist clinics in Los Algodones, contrary to some dental clinics back in the States that can cost you 30 dollars easily.
                    </p>',
            ],
        ];

        return view('what-is-los-algodones', ['text_center' => $text_center, 'left_imagen' => $left_imagen, 'right_imagen' => $right_imagen]);
    }

    public function choosingTheClinic()
    {
        $text_center = [
            (object) [
                'class' => null,
                'title' => 'CHOOSING THE CORRECT CLINIC FOR YOUR NEEDS',
                'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">
                        Choosing the right clinic for your specific needs anywhere in the world requires research and attention to detail. For example, you would not go to a cardiologist if suffering from arthritis. This same rule applies in the dental field must ensure that your needs are attended to by a specialist for the type of dentistry your work requires, as not every DDS is an experienced doctor.
                    </p>',
            ],
        ];

        $right_imagen_box = [
            (object) [
                'class' => 'bg-dark',
                'image' => asset('img/specialist-dentist.jpg'),
                'content' => '<h3 spellcheck="false" data-ms-editor="true">How do I know if my dentist is a specialist in his/her field?</h3>
                    <p spellcheck="false" data-ms-editor="true">
                        First of all, you would want to verify their Educational Background, Diplomas, and certifications. Take into consideration the time practicing, advanced education courses they take, and reviews.
                    </p>',
            ],
        ];

        $left_imagen_box = [
            (object) [
                'class' => 'bg-dark',
                'image' => asset('img/clinic_01.jpg'),
                'content' => '<h3 spellcheck="false" data-ms-editor="true">How do I choose between clinics and what clinic advantages should I be looking for?</h3>
                    <p spellcheck="false" data-ms-editor="true">
                        Another important factor to consider is the materials and technology that is being used at the clinic. It is proven that working with digital dentistry there is reduced risk of problems occurring during the treatment, as well as problems that could occur years after.
                    </p>
                    <p spellcheck="false" data-ms-editor="true">
                        You want to make sure that your Dental Clinic in Los Algodones has state of the art technology available to make your experience as safe, accurate and minimally invasive as possible.
                    </p>'
            ],
        ];

        $two_columns = [
            (object) [
                'class' => null,
                'column1' => '<p spellcheck="false" data-ms-editor="true">
                        You can also verify dentists´ licenses on government websites to verify they are allowed to practice in Mexico and have no claims for malpractice.
                        <br />
                        <br />
                        To obtain certification in Dentistry in Mexico, one must study 4-5 years (Depending on the University) before earning their title as a Doctor of Dental Science. From that point, dentists will choose a field in which to specialize. Such as:
                    </p>',
                'column2' => '<ul style="list-style: circle; padding-left: 15px;">
                        <li>Endodontics – (Performs root canals and similar treatments).</li>
                        <li>Oral Maxillofacial Surgery – (Placement of implants, Sinus Lifting, Bone Graft, extractions, Orthognathic Surgery).</li>
                        <li>Prosthodontics – (Crowns, Veneers, Bridges, and other restorative or cosmetic procedures).</li>
                        <li>Orthodontics – (Braces, Invisalign).</li>
                        <li>Periodontics – (Working with soft tissues, ligaments, and surrounding structures of the teeth).</li>
                        <li>Pediatrics – (Dental Treatments of children).</li>
                    </ul>',
                'center' => '<p>
                        Each of these specialties has its rigorous tests and examinations and hones the doctor´s skill and knowledge in their respective fields. To be considered a specialist, in any of the treatments mentioned, dentists must spend five to eight years to complete each specialty is important because it will show you the skill level, knowledge, and experience that you should receive at that clinic.
                    </p>',
            ],
            (object) [
                'class' => null,
                'column1' => '<h3>What Materials should I be looking for?</h3>
                    <p>
                        As many of you are looking to travel for your dental needs you should consider future maintenance of your dental work. In the case of dental implants, it is important that you make sure that implant brands are recognized in your country. Well know brands of implants such as Straumann and Nobel BioCare are recognized worldwide and even offer warranties on their implants.
                    </p>',
                'column2' => '<ul style="padding: 2rem;">
                        <li>
                            <h3>SAFETY</h3>
                        </li>
                        <li>
                            <h3>STERILIZATION AND</h3>
                        </li>
                        <li>
                            <h3>GUARANTEES ON YOUR DENTAL TREATMENT</h3>
                        </li>
                    </ul>',
                'center' => '<p>
                        Choosing a Clinic with the very best cross-infection prevention and hygiene controls is highly important. The best Clinics will provide you with full information about their sterilization methods and procedures, and will be able to demonstrate the use of appropriate sterilizing equipment, training, materials and protocols. A three-tier sterilization protocol is the norm in hygiene control so make sure your clinic is up to date and following these sterilization techniques.
                    </p>',
            ],
        ];

        $text_tabs = [
            (object) [
                'class' => 'bg-dark',
                'title' => null,
                'tabs' => [
                    (object) [
                        'class' => 'active',
                        'title' => 'Liquid Sterilization',
                        'content' => '<p spellcheck="false" data-ms-editor="true">
                                After scrubbing each material vigorously, the materials are soaked for 45 minutes in a liquid sterilization solution.
                            </p>
                            <p spellcheck="false" data-ms-editor="true">
                                This solution is 100% Antibacterial and is complete in its action against viral infections such as hepatitis B, HIV, Polio etc.
                            </p>',
                    ],
                    (object) [
                        'class' => null,
                        'title' => 'Autoclaving System',
                        'content' => '<p spellcheck="false" data-ms-editor="true">
                                This is a sterilization device that uses high temperature and pressure to steam clean the instruments. This is going above and beyond the normal measures of sterilization.
                            <p spellcheck="false" data-ms-editor="true">
                                A good autoclave will reach temperatures of up to 270 degrees and will run around 30 minutes to ensure that materials are perfectly sterile.
                            </p>',
                    ],
                    (object) [
                        'class' => null,
                        'title' => 'UV Chamber',
                        'content' => '<p spellcheck="false" data-ms-editor="true">
                                The final step of the sterilization process is to place the dental instruments into sterile packages and place them in a UV Chamber. This chamber maintains a completely sterile environment for the instruments. When the instruments are ready to use, your dentist should open the now clean packages in front of you to ensure that they are absolutely clean and sterile.
                            </p>',
                    ],
                ],
            ],
        ];

        return view(
            'choosing-the-clinic',
            [
                'text_center' => $text_center,
                'right_imagen_box' => $right_imagen_box,
                'left_imagen_box' => $left_imagen_box,
                'two_columns' => $two_columns,
                'text_tabs' => $text_tabs,
            ],
        );
    }

    public function samplePrice()
    {
        return view('sample_price');
    }

    public function treatments($treatment)
    {
        $content = null;
        switch ($treatment) {
            case 'teeth_withening':
                $content = [
                    (object) [
                        'template' => 'wide_project',
                        'content' => (object) [
                            'image' => asset('img/treatments/teeth_withening_header.jpg'),
                            'title' => 'teeth withening',
                            'content' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'text_center',
                        'content' => (object) [
                            'class' => null,
                            'title' => null,
                            'content' => '<p class="lead" spellcheck="false" data-ms-editor="true">
                                    Teeth whitening is a simple process.
                                    <br />
                                    Whitening products contain one of two tooth bleaches, these bleaches break stains into smaller pieces, which makes the color less concentrated and your teeth brighter.
                                    <br />
                                    Unlike the teeth whitening kits for use at home, the teeth whitening procedure performed by the dentist is more efficient.
                                    <br />
                                    The dentist uses laser light combined with peroxide to remove stains and return the natural white color of the teeth. The procedure lasts for one hour, and depending on the stains, it is possible to achieve whitening from 2 to 5 shades.
                                    <br />
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'right_imagen_box_text',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'image' => asset('img/treatments/teeth_withening.jpg'),
                            'content' => '<h3 spellcheck="false" data-ms-editor="true">How does Teeth Whitening Work?</h3>
                                <p spellcheck="false" data-ms-editor="true">
                                    There are two ways commonly done: bleaching and non-bleaching whitening products. Often the terms “bleaching” and “whitening” are used interchangeably, but the U.S. Food and Drug Administration (FDA) states the term “bleaching” can only use when a product contains bleach.
                                </p>
                                <p spellcheck="false" data-ms-editor="true">
                                    Considering a product “whitening” will remove food or debris from the teeth without bleach.
                                </p>
                                <p spellcheck="false" data-ms-editor="true">
                                    Bleaching products contain peroxide (hydrogen peroxide or carbamide peroxide), and these products remove both surface and deep stains on teeth and may cause teeth to become even lighter than their natural shade.
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'left_imagen_box_text',
                        'content' => (object) [
                            'class' => null,
                            'image' => asset('img/treatments/whitening.jpg'),
                            'content' => '<h3 spellcheck="false" data-ms-editor="true">Let the Dentist do the Whitening</h3>
                                <p spellcheck="false" data-ms-editor="true">
                                    The ADA (American Dental Association) recommends if decide to bleach your teeth consult a dentist first.
                                    <br />
                                    Most dentists in Mexico can come up with the best whitening options and a treatment plan to avoid complications.
                                    <br />
                                    Teeth whitening can be done in a dentist’s office in about an hour.
                                    <br />
                                    This procedure involves the application of a tooth whitening gel containing between 25% to 40% hydrogen peroxide, aiming a special heating lamp at the teeth for three 20-minute intervals, with reapplication of the gel between intervals.
                                    <br />
                                    Some dentists in Mexico may also use a laser, which accelerates or activate the whitening process.
                                <p/>',
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'column1' => '<h3 spellcheck="false" data-ms-editor="true">How does Laser teeth whitening work?</h3>
                                <p>
                                    Laser teeth whitening is administered in a dental office exclusively and is the most expensive method for whitening.
                                    <br />
                                    Bleach is applied to each tooth, and heat generated by a laser enhances its effectiveness while ultimately speeding up the process. This procedure uses a strong bleaching gel that the laser activates and enhances for quick, dramatic results.
                                </p>',
                            'column2' => '<h3 spellcheck="false" data-ms-editor="true">Do lips, gums, and tongue get affected?</h3>
                                <p>
                                    A protective barrier is used during the whitening procedure to keep lips, gums, and tongue away from the whitening gel so it stays in place on the teeth.
                                    <br />
                                    For optimal results, the dentist will usually give whitening trays molded for your teeth so you can follow up at home with bleaching solutions.
                                </p>',
                            'center' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'text_center',
                        'content' => (object) [
                            'class' => null,
                            'title' => null,
                            'content' => '<h3 spellcheck="false" data-ms-editor="true">Am I a Candidate for Whitening?</h3>
                                <p>
                                    Teeth whitening is safe for most people and the best candidates are those with only mild to moderate discoloration. But certain types of discoloration cannot be corrected with whitening treatments, and certain dental or medical conditions can reduce the chances that teeth whitening will work.
                                </p>'
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'column1' => '<p>
                                    These include:
                                    <ul style="list-style: circle; padding-left: 15px;">
                                        <li>Porcelain veneers, dental crowns, caps, fillings, or dental adhesives on the front teeth. These synthetic materials do not respond well to bleaching products. You may need new crowns or veneers if you want these teeth to appear whiter.</li>
                                        <li>Yellow teeth generally bleach well, however, brown teeth may not bleach as much. Gray-tinged teeth, white spots, or discoloration from a “dead” tooth may not become discolored at all.</li>
                                        <li>Some conditions can be made worse by teeth whitening. These include teeth with sensitive or worn enamel and patients with bruxism (grinding or gnashing of teeth) or temporomandibular joint disorder (TMJ / TMD). In some cases with these conditions, the procedure can be done in the office. Consult your dentist.</li>
                                        <li>If tooth discoloration is caused by medications or dental injury, treatment is not effective.</li>
                                    </ul>
                                </p>',
                            'column2' => '<h3 spellcheck="false" data-ms-editor="true">How to Choose Wisely</h3>
                                <p>
                                    Before deciding to have professional teeth whitening in Mexico or trying over-the-counter products, consult your dentist.
                                </p>
                                <p>
                                    He will let you know if you have a condition that does not respond well to treatment or that could get worse.
                                </p>',
                            'center' => null,
                        ],
                    ]
                ];
                break;

            case 'dental_implants':
                $content = [
                    (object) [
                        'template' => 'wide_project',
                        'content' => (object) [
                            'image' => asset('img/treatments/implants.jpg'),
                            'title' => 'dental implants',
                            'content' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'right_imagen_box_text',
                        'content' => (object) [
                            'class' => null,
                            'image' => asset('img/treatments/implant.jpg'),
                            'content' => '<h3 spellcheck="false" data-ms-editor="true">How much are Dental Implants in Mexico</h3>
                                <p>
                                    The average Dental Implant Mexico Cost of Surgical Placement of One Dental Implant (not including Extraction, Bone grafting, Crowns, or Abutment) is around USD 700 to 1,200.
                                </p>
                                <h3 spellcheck="false" data-ms-editor="true">In comparison</h3>
                                <p>
                                    While Zirconia Dental Implants Cost in Mexico is about USD 1,950 each. There is Mandatory Cost like Temporaries Extractions, Bone Grafting.
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'text_center',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'title' => null,
                            'content' => '<p>
                                    Cost may vary between Dentists and Clinics. Most Dental Implant Treatments Abroad require two trips as the implants need to integrate and heal before they can be worked on.
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => null,
                            'column1' => '<p>
                                    For this reason it’s important you don’t forget to add Travel Costs to your Budget. When Looking for Dental Implant in Mexico its important to consider the following:
                                </p>
                                <ul style="list-style: circle; padding-left: 15px;">
                                    <li>Brands of Implants</li>
                                    <li>Technology involved in placing the Implant (3D CBCT Imaging, Surgical Guide, 3D Printing)</li>
                                </ul>',
                            'column2' => '<ul style="list-style: circle; padding-left: 15px;">
                                    <li>Type of abutment(Zirconia, Titanium, Prefab, Custom)</li>
                                    <li>What kind of Restoration (Crown, Bridge/Zirconia, Porcelain)</li>
                                    <li>Type of Bone, Infection, Extraction, Bone Loss, Anatomical Structures (Sinus, Nerve)</li>
                                    <li>Expertise, Training, Technologes, Location, Cleanliness, Protocols.</li>
                                </ul>',
                            'center' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'column1' => '<p>
                                    Titanium Dental Implants are used for Single Teeth to Full Mouth Restorations, they are the Most Common type of Implant. 95% of the People that go to Mexico end up getting this type of Implant.
                                </p>',
                            'column2' => '<p>
                                Usually, the cost is divided into two phases the Surgical Phase which includes the Surgical Placement of the Implant and any Surgical Work like Extraction and Bonegrafting, and the second phase is the abutment and Crown.
                            </p>',
                            'center' => '<h3 spellcheck="false" data-ms-editor="true" class="text-center">
                                    Dental Implants Mexico<br />
                                    Average Price USD 700 to 1,100
                                </h3>',
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => null,
                            'column1' => '<p>
                                    Short Implants are an excellent solution to rehabilitate cases with severe loss of maxillary and mandibular bone.
                                </p>',
                            'column2' => '<p>
                                    Short Implants helps to avoid more invasive interventions, reducing time-frames and increasing patient satisfaction.
                                </p>',
                            'center' => '<h3 spellcheck="false" data-ms-editor="true" class="text-center">
                                    Short Dental Implants<br />
                                    USD 800 to 1,200
                                </h3>',
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'column1' => '<p>
                                    Mini Dental Implants are a great solution for Snap on Dentures. Patients with big infections severe bone lose or mutliple extractions sometimes are not the best candidates for mini implants.
                                </p>',
                            'column2' => '<p>
                                Mini implants work great for people that are currently using Dentures and have a small bone ridge, is most frecuently applied in Older Patient with Boneloss.<br />
                                Mini implants are commonly used for snap on dentures and sometimes for single tooth restorations.
                            </p>',
                            'center' => '<h3 spellcheck="false" data-ms-editor="true" class="text-center">
                                    Mini Implants<br />
                                    From USD 350
                                </h3>',
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => null,
                            'column1' => '<p>
                                    Zygomatic implants are an alternative to patients who are not candidates for regular dental implants due a minification of maxilar bone.
                                </p>',
                            'column2' => '<p>
                                Zygomatic implants receive their name of the bone they are attached, which is known as Cheekbone, or Zygomatic bone.
                            </p>',
                            'center' => '<p>
                                    Usually this type of Implants are used in coordination with traditional dental implants to get a better support of the fix denture.
                                </p><br />
                                <h3 spellcheck="false" data-ms-editor="true" class="text-center">
                                    Zygomatic Dental Implants<br />
                                    From USD 2,500
                                </h3>',
                        ],
                    ],
                    (object) [
                        'template' => 'text_center',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'title' => 'Full Mouth Dental Implants Mexico',
                            'content' => '<p>
                                    All on 4, All on 6, Snap-on Dentures, 3 on 6 Dental Implants with Fixed Hybrid, Zirconia (Prettau), Nano Ceramic (Crystal Ultra)
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => null,
                            'column1' => '<h3 spellcheck="false">All on 4 Dental Implants Mexico</h3>
                                <p>
                                    All on 4 Treatment in Mexico consist in a couple factors, for example The amount of bone available, The type of final restoration,
                                    <br />
                                    And the Temporary restoration. Usually these treatments are done in two phases,
                                </p>',
                            'column2' => '<p>
                                    The first phase might include 4 implants and a temporary restoration and a final restoration usually a fixed hybrid denture.
                                    <br />
                                    Find a location that does these treatments screw-retained not cemented. A fully-equipped place in order to do these treatments correctly in a short time frame.
                                </p>',
                            'center' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'column1' => '<h3 spellcheck="false">All on 6 Dental Implants Mexico</h3>
                                <p>
                                    All on 6 is a great option for people who have good bones, are willing to do sinus lifts. These patients need more support than just 4 implants or a heavier restoration like a prettau bridge.
                                </p>',
                            'column2' => '<p>
                                    Prices usually incresase around 20% compared to the all on 4 Treatment. It is important to find a clinic that will do this restoration screw-retained and no cemented as cemented restoration coannot be removed and are a risk in the long run.
                                </p>',
                            'center' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => null,
                            'column1' => '<h3 spellcheck="false">3 on 6 Dental Implants Mexico</h3>
                                <p>
                                    This procedure will create permanent teeth using 3 bridges supported by two dental implants each.
                                </p>',
                            'column2' => '<p>
                                    To anchor the prosthetic teeth in place, the dentist will placed six implants in the lower or upper jawbone permanently.
                                </p>',
                            'center' => '<p>
                                    Their Main Advantage over All on 4 is that there is no need for an acrylic gumline. The average price for this treatment in USA and Canada is around USD 15,000.
                                </p>',
                        ],
                    ],
                ];
                break;

            case 'dental_veneers':
                $content = [
                    (object) [
                        'template' => 'wide_project',
                        'content' => (object) [
                            'image' => asset('img/treatments/dental_veneers.jpg'),
                            'title' => 'dental veneers',
                            'content' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'text_center',
                        'content' => (object) [
                            'class' => null,
                            'title' => null,
                            'content' => '<p>
                                    Veneers are made from various types of porcelain or ceramic, these include:
                                </p>
                                <p>
                                    Pressed ceramic: If you’re looking for dental veneers in Mexico, these are typically stronger, but they are thicker than other types of Veneers.
                                </p>
                                <p>
                                    Stacked ceramic: veneers allow ceramists the opportunity to create more precise and specialized veneers, suited to a patient’s individual needs. Usually a little weaker because of the porcelain work.
                                </p>
                                <p>
                                    Lithium disilicate: It is only possible to create these types of veneers with CAD/CAM technology. Lithium disilicate is a new type of dental porcelain deemed the strongest material for veneers.
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'right_imagen_box_text',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'image' => asset('img/treatments/veneers.jpg'),
                            'content' => '<h3>Two Most Common Veneers Brands In Mexico</h3>
                                    <p>
                                        There are several trusted and reputable manufacturers for Dental Veneers in Mexico but, among the most popular are: IPS Empress® and IPS e.max® Each of the top-rated brands most used for cosmetic dentistry has its advantages, and each of the best smile designers and top dental clinics favors various brands. If a potential patient feels strongly about one particular brand for his dental treatment, it is best to discuss this with the dentist during the initial consultation.
                                    </p>
                                    <h4>The Mock-Up / Wax-Up</h4>
                                ',
                        ],
                    ],
                    (object) [
                        'template' => 'text_center',
                        'content' => (object) [
                            'class' => null,
                            'title' => 'Dental Veneers in Mexico First Consultation',
                            'content' => '<p>
                                    After your first consultation usually, the dentist will create a mock-up this will help them with the temporaries and will give you a rough idea of the outcome.
                                </p>
                                <p>
                                    The dental clinics in Mexico use various methods to create these mock-ups.
                                </p>
                                <p>
                                    While some dentists use old-fashioned wax impressions, others use state-of-the-art technology to create three-dimensional computer images.
                                </p>
                                <p>
                                    Neither method is better than the other. The important part of this process is to see that the dentist works with care and precision to create the most accurate and beautifully rendered representation of the final outcome.
                                </p>',
                        ],
                    ],
                    (object) [
                        'template' => 'accordion',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'title' => 'Why get veneers in Mexico?',
                            'elements' => [
                                (object) [
                                    'title' => 'Teeth Worn Enamel',
                                    'content' => '<p>
                                            If your teeth are worn down dental veneers, might not be the best option for you most of the time Dental Crowns or, A Full Mouth Restoration Might be the Best Option.
                                            <br />
                                            Veneers are more fragile and are not meant for people who grind their teeth or have a collapsed bite.
                                            <br />
                                            A combination of crowns, and veneers to regain the verticle dimension might be the best for your case, other things to take into consideration your habits (soft drink, tea, or coffee consumption, smoking, medication use, etc.).
                                        </p>',
                                ],
                                (object) [
                                    'title' => 'Does the placement procedure hurt?',
                                    'content' => '<p>
                                            No, the placement of veneers is a painless procedure. Dentists numb the tooth and the surrounding area before removing enamel and in many cases, the patients don’t need an anesthetic.
                                            <br />
                                            Apart from adjusting to the change, there may only be a slight sensitivity to the removal of enamel which lasts a couple of weeks.
                                        </p>',
                                ],
                                (object) [
                                    'title' => 'Can I get veneers if I have gum disease or dental decay?',
                                    'content' => '<p>
                                            All potential patients should have good oral health. While cavities and gum disease do not disqualify anyone from receiving veneers, it is best to treat the condition before placing veneers to prevent further damage and decay.
                                        </p>',
                                ],
                                (object) [
                                    'title' => 'What happens if I only get veneers on my upper teeth?',
                                    'content' => '<p>
                                            Because veneers are created and custom made to match the natural teeth, it is possible to get them on only the upper, or lower teeth.
                                        </p>',
                                ],
                                (object) [
                                    'title' => 'How many veneers should I get?',
                                    'content' => '<p>
                                            The number largely depends on the size of the patient’s smile and how wide their grin is.
                                            <br />
                                            Patients show anything from six to twelve teeth when they smile. It is also largely dependent on personal goals and what the desired outcome is.
                                        </p>',
                                ],
                            ],
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => null,
                            'column1' => '<h3>Tooth Sensitivity</h3>
                                <p>
                                    Veneers are considered a low-risk treatment but there is the potential to feel some slight tooth sensitivity.
                                    <br />
                                    The sensitivity could be enhanced by very cold or hot foods and while this is normal to feel for a few weeks, there may be a problem if it persists for more than three to six months.
                                    <br />
                                    The problem could lie with leaking cement or minor nerve damage.
                                </p>',
                            'column2' => '<h3>Dental Damage</h3>
                                <p>
                                    There is a small risk that the underlying dentin could become damaged during the enamel removal process.
                                    <br />
                                    A poorly fitted veneer could also cause a change in the alignment of the teeth which may result in sensitivity, discomfort, jaw pain or bruxism
                                </p>',
                            'center' => null,
                        ],
                    ],
                    (object) [
                        'template' => 'two_columns',
                        'content' => (object) [
                            'class' => 'bg-dark',
                            'column1' => '<h3>Future Replacement</h3>
                                <p>
                                    While quality veneers that are maintained correctly can last decades, they will eventually need replacement.
                                    <br />
                                    The next replacement process will too need some enamel to be removed. Even though it is a small amount, there may not have been enough enamel in the first place which can result in an alternative treatment being sought.
                                    <br />
                                    This is something that should be seen when the first set of veneers are considered.
                                </p>',
                            'column2' => '<h3>Temporary Side Effects</h3>
                                <p>
                                    It is uncommon for patients to feel permanent sensitivity after receiving veneers but there may be some temporary discomfort.
                                    <br />
                                    It is typically only in the first one to three weeks that a patient will feel this discomfort.
                                </p>',
                            'center' => '<p>
                                    Avoiding certain foods and drinks can help patients control the discomfort and sensitivity.
                                    <br />
                                    It may even be an option to use desensitizing toothpaste for about six months following the procedure.
                                </p>',
                        ],
                    ],
                ];
                break;
        }
        return view('treatments', ['treatment' => $content]);
    }
}
