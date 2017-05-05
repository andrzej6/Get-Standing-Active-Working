@extends('layouts.gusa.basic-sub')


@section('description')
    Leading international scientific research on physical inactivity and sedentary living. Sedentary lifestyles
    is one of the fourth largest cause of preventable death.
@endsection

@section('keywords')
    health-risks, sedentary, sitting, lifestyles, heart-disease, diabetes, cancer, obesity, dementia, depression,
    back-ache, international-scientific, research,active-working, productive-working, office-productivity,
    sit-stand, healthy-office, health-and-safety, wellness
@endsection

@section('title')
    International Scientific Research on Sedentary Living.
@endsection



@section('content-smallwidth')
    <div class="row-fluid nonavarrows">

        <img src="img/getstanding/usa/slider/subpage/areyouactive.png" alt="active">

    </div><!-- .row-fluid -->



    <div class="row-fluid">

        @include('shared.trail')
        <br/>

        <span id="link4" class="research-nvis"></span>
        <h1>Research</h1>

        <span id="link5" class="research-nvis"></span>

        There has been exponential growth in international research studies focusing on Sedentary Behaviour (SB)
        since 2008. Whilst still emerging, the research now provides compelling evidence that there is
        a multitude of serious health risks connected to "prolonged" and "excessive" sitting.
        The index below details research listed both in the
        <span id="link7" class="research-nvis"></span>
        <a href="pdfs/gbs/expert_statement.pdf" target="_blank"><u>Expert Statement</u></a>
        <span style="color:#0066CB;">(BLUE)</span> and supplementary research studies
        <span style="color:#EA1E30;">(RED)</span>.

        <br/>
        <br/>


        <div class="referen">

            <ol>

                <li value="4">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/15387473"
                       class="shortcode_button btn_small btn_type11 link-black" target="_blank">
                        Link
                    </a>
                    Levine JA. Non-exercise activity thermogenesis (NEAT). Nutrition reviews 2004;62(7 Pt 2):S82-97.
                </li>


                <li value="5" id="link8">
                    <a href="pdfs/research/5.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Buckley JP, Mellor DD, Morris M, et al. Standing-based office work shows encouraging signs of
                    attenuating post-prandial glycaemic excursion. Occupational and environmental medicine
                    2014;71(2):109-11.
                </li>

                <li value="7" id="link10">
                    <a href="pdfs/research/7.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Smith L, Thomas EL, Bell JD, et al. The association between objectively measured sitting
                    and standing with body composition: a pilot study using MRI. BMJ open 2014;4(6):e005476.
                </li>

                <li value="8" id="link11">
                    <a href="pdfs/research/8.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Henson J, Edwardson CL, Morgan B, et al. Associations of Sedentary Time with Fat Distribution
                    in a High-Risk Population. Medicine and science in sports and exercise 2014.
                </li>

                <li value="10" id="link12">
                    <a href="pdfs/research/10.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Thorp AA, Kingwell BA, Sethi P, et al. Alternating bouts of sitting and standing
                    attenuate postprandial glucose responses. Medicine and science in sports and exercise
                    2014;46(11):2053-61.
                </li>

                <li value="11" id="link13">
                    <a href="pdfs/research/11.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Dunstan DW, Kingwell BA, Larsen R, et al. Breaking up prolonged sitting reduces postprandial
                    glucose and insulin responses. Diabetes care 2012;35(5):976-83.
                </li>

                <li value="12" id="link19">
                    <a href="pdfs/research/12.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Bailey DP, Locke CD. Breaking up prolonged sitting with light-intensity walking improves
                    postprandial glycemia, but breaking up sitting with standing does not.
                    Journal of science and medicine in sport / Sports Medicine Australia 2014.
                </li>

                <li value="13" id="link27">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/25168375" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Thorp AA, Kingwell BA, Owen N, et al. Breaking up workplace sitting time
                    with intermittent standing bouts improves fatigue and musculoskeletal
                    discomfort in overweight/obese office workers. Occupational and
                    environmental medicine 2014;71(11):765-71.
                </li>

                <li value="19" id="link32">
                    <a href="pdfs/research/19.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Henson J, Yates T, Biddle SJ, et al. Associations of objectively measured sedentary
                    behaviour and physical activity with markers of cardiometabolic health.
                    Diabetologia 2013;56(5):1012-20.
                </li>

                <li value="27" id="link33">
                    <a href="pdfs/research/27.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Church TS, Thomas DM, Tudor-Locke C, et al. Trends over 5 decades in U.S. occupation-related
                    physical activity and their associations with obesity. PloS one 2011;6(5):e19657.
                </li>

                <li value="32" id="link34">
                    <a href="pdfs/research/32.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Proper KI, Singh AS, van Mechelen W, et al. Sedentary behaviors and health
                    outcomes among adults: a systematic review of prospective studies.
                    American journal of preventive medicine 2011;40(2):174-82.
                </li>

                <li value="33" id="link36">
                    <a href="pdfs/research/33.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Healy GN, Matthews CE, Dunstan DW, et al. Sedentary time and cardio-metabolic
                    biomarkers in US adults: NHANES 2003-06. European heart journal 2011;32(5):590-7.
                </li>

                <li value="34" id="link37">
                    <a href="pdfs/research/34.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Schmid D, Leitzmann MF. Television viewing and time spent sedentary in
                    relation to cancer risk: a meta-analysis. Journal of the National Cancer
                    Institute 2014;106(7).
                </li>

                <li value="36" id="link38">
                    <a href="pdfs/research/36.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Wilmot EG, Edwardson CL, Achana FA, et al. Sedentary time in adults and
                    the association with diabetes, cardiovascular disease and death: systematic
                    review and meta-analysis. Diabetologia 2012;55(11):2895-905.
                </li>

                <li value="37" id="link39">
                    <a href="pdfs/research/37.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Biswas A, Oh PI, Faulkner GE, et al. Sedentary time and its association
                    with risk for disease incidence, mortality, and hospitalization in adults:
                    a systematic review and meta-analysis. Annals of internal medicine 2015;162(2):123-32.
                </li>

                <li value="38" id="link40">
                    <a href="pdfs/research/38.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Grontved A, Hu FB. Television viewing and risk of type 2 diabetes, cardiovascular disease,
                    and all-cause mortality: a meta-analysis. Jama 2011;305(23):2448-55.
                </li>

                <li value="39" id="link41">
                    <a href="pdfs/research/39.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Chau JY, Grunseit A, Midthjell K, et al. Sedentary behaviour and risk of
                    mortality from all-causes and cardiometabolic diseases in adults:
                    evidence from the HUNT3 population cohort. British journal of sports medicine 2013.
                </li>

                <li value="40" id="link42">
                    <a href="pdfs/research/40.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Matthews CE, George SM, Moore SC, et al. Amount of time spent in sedentary
                    behaviors and cause-specific mortality in US adults. The American journal
                    of clinical nutrition 2012;95(2):437-45.
                </li>

                <li value="41" id="link43">
                    <a href="pdfs/research/41.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Hamer M, Stamatakis E, Mishra GD. Television- and screen-based activity
                    and mental well-being in adults. American journal of preventive medicine
                    2010;38(4):375-80.
                </li>

                <li value="42" id="link44">
                    <a href="pdfs/research/42.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Teychenne M, Ball K, Salmon J. Physical activity, sedentary behavior and
                    depression among disadvantaged women. Health education research 2010;25(4):632-44.
                </li>

                <li value="43" id="link45">
                    <a href="pdfs/research/43.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Hamer M, Coombs N, Stamatakis E. Associations between objectively assessed and
                    self-reported sedentary time with mental health in adults: an analysis of
                    data from the Health Survey for England. BMJ open 2014;4(3):e004580.
                </li>

                <li value="44" id="link50">
                    <a href="pdfs/research/44.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Hamer M, Stamatakis E. Screen-based sedentary behavior, physical activity, and muscle
                    strength in the English longitudinal study of ageing. PloS one 2013;8(6):e66222.
                </li>


                <li value="45" id="link51">
                    <a href="pdfs/research/45.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Tikkanen O, Haakana P, Pesola AJ, et al. Muscle activity and inactivity periods
                    during normal daily life. PloS one 2013;8(1):e52228.
                </li>

                <li value="50" id="link52">
                    <a href="pdfs/research/50.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Dogra S, Stathokostas L. Sedentary behaviour and physical activity are independent
                    predictors of successful aging in middle-aged and older adults. J Aging Phys Activ 2012;20:S250-S51.
                </li>

                <li value="51" id="link55">
                    <a href="pdfs/research/51.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Chastin SFM, Mandrichenko O, Helbostadt JL, et al. Associations between objectively-measured
                    sedentary behaviour and physical activity with bone mineral density in adults and older adults,
                    the NHANES study. Bone 2014;64:254-62.
                </li>

                <li value="52" id="link61">
                    <a href="pdfs/research/52.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Katzmarzyk PT. Standing and mortality in a prospective cohort of Canadian adults.
                    Medicine and science in sports and exercise 2014;46(5):940-6.
                </li>

                <li value="55" id="link64">
                    <a href="pdfs/research/55.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Pronk NP, Katz AS, Lowry M, et al. Reducing occupational sitting time and
                    improving worker health: the Take-a-Stand Project, 2011. Preventing
                    chronic disease 2012;9:E154.
                </li>

                <li value="61" id="link68">
                    <a href="pdfs/research/61.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Roffey DM, Wai EK, Bishop P, et al. Causal assessment of occupational
                    standing or walking and low back pain: results of a systematic review.
                    The spine journal : official journal of the North American Spine Society
                    2010;10(3):262-72.
                </li>

                <li value="64" id="link69">
                    <a href="pdfs/research/64.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Levine JA. Nonexercise activity thermogenesis (NEAT): environment and biology.
                    American journal of physiology Endocrinology and metabolism 2004;286(5):E675-85.
                </li>

                <li value="68" class="research-red" id="link70">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/25760431"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Greer, A.E., Sui, X., Maslow, A.L., Greer, B.K. & Blair, S.N. (2015).
                    The effects of sedentary behavior on metabolic syndrome independent of
                    physical activity and cardiorespiratory fitness. J Phys Act Health, 12, 68-73,
                    doi: 10.1123/jpah.2013-0186.
                </li>

                <li value="69" class="research-red" id="link71">
                    <a href="pdfs/research/69.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Healy, G.N., Wijndaele, K., Dunstan, D.W., Shaw, J., Salmo, J., Zimmet, P.Z. & Owen, N. (2008).
                    Objectively measured sedentary time, physical activity, and metabolic risk. The Australian Diabetes,
                    Obesity and Lifestyle Study (AusDiab). Diabetes Care, 31, 369-371.
                </li>

                <li value="70" class="research-red" id="link72" >
                    <a href="pdfs/research/70.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Dunstan, D.W., Salmon, J., Owen, N., Armstrong, T., Zimmet, P.Z., Welborn, T.A.,… Shaw,
                    J.E. & AusDiab Steering Committee. (2005). Associations of TV viewing and physical
                    activity with the metabolic syndrome in Australian adults. Diabetologia, 48, 2254-2261,
                    doi: 10.1007/s00125-005-1963-4.
                </li>

                <li value="71" class="research-red" id="link73">
                    <a href="pdfs/research/71.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Tremblay, M.S., LeBlanc, A.G., Kho, M.E., Saunders, T.J., Larouche, R., Colley, R.C.,…
                    Gorber, S.C. (2011). Systematic review of sedentary behaviour and health indicators
                    in school-aged children and youth. International Journal of Behavioral Nutrition
                    and Physical Activity, 8, doi:10.1186/1479-5868-8-98.
                </li>

                <li value="72" class="research-red" id="link74">
                    <a href="pdfs/research/72.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Ford, E.S. & Caspersen, C.J. (2012). Sedentary behaviour and cardiovascular
                    disease: a review of prospective studies. Int. J. Epidemiol, 41, 1338-1353, doi: 10.1093/ije/dys078.
                </li>

                <li value="73" class="research-red" id="link75">
                    <a href="pdfs/research/73.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Edwardson, C.L., Gorely, T., Davies, M.J., Gray, L.J., Khunti K., Wilmot, E.G., … Biddle,
                    S.J.H. (2012). Association of sedentary behaviour with metabolic syndrome: a meta-analysis.
                    PLoS One, 7, doi: 10.1371/journal.pone.0034916
                </li>

                <li value="74" class="research-red" id="link76">
                    <a href="pdfs/research/74.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    De Rezende, L. F. M., Rodrigues Lopes, M., Rey-López, J. P., Matsudo, V. K. R.,
                    & Luiz, O. do C. (2014). Sedentary behavior and health outcomes:
                    An overview of systematic reviews. PLoS ONE, 9, doi:10.1371/journal.pone.0105620.
                </li>

                <li value="75" class="research-red" id="link77">
                    <a href="pdfs/research/75.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Buman, M.P., Winkler, E.A., Kurka, J.M., Hekler, E.B., Baldwin, C.M., Owen,
                    N., … Gardiner, P.A. (2014). Reallocating time to sleep, sedentary behaviors,
                    or active behaviors: associations with cardiovascular disease risk biomarkers,
                    NHANES 2005-2006. Am J Epidemiol, 179, 323-34.
                </li>

                <li value="76" class="research-red" id="link78">
                    <a href="pdfs/research/76.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Lynch, B.M. (2010). Sedentary behavior and cancer: a systematic review of the
                    literature and proposed biological mechanisms. Cancer Epidemiol Biomarkers Prev, 19, 2691–2709.
                </li>

                <li value="77" class="research-red" id="link79">
                    <a href="pdfs/research/77.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Thorp, A.A., Owen, N., Neuhaus, M. & Dunstan, D.W. (2011). Sedentary behaviors and
                    subsequent health outcomes in adults a systematic review of longitudinal
                    studies, 1996–2011. Am J Prev Med, 41, 207–215.
                </li>

                <li value="78" class="research-red" id="link80">
                    <a href="pdfs/research/78.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Van Uffelen, J.G., Wong, J., Chau, J.Y., van der Ploeg, H.P., Riphagen I., Gilson, N.D.,
                    … Brown, W.J. (2010). Occupational sitting and health risks:
                    A systematic review. Am J Prev Med, 39, 379–388.
                </li>

                <li value="79" class="research-red" id="link81">
                    <a href="pdfs/research/79.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Zhou, Y., Zhao, H. & Peng, C. (2015). Association of sedentary behaviour with
                    the risk of breast cancer in women: Update meta-analysis of observational studies.
                    Annals of Epidemiology, pii: S1047-2797(15)00192-1, doi:http://dx.doi.org/10.1016/j.annepidem.2015.05.007.
                </li>

                <li value="80" class="research-red" id="link82">
                    <a href="pdfs/research/80.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Cong, Y.J., Gan, Y., Sun, H.L., Deng, J., Cao, S.Y., Xu, X. & Lu, Z.X. (2014).
                    Association of sedentary behaviour with colon and rectal cancer: A meta-analysis
                    of observational studies. British Journal of Cancer, 110, 817-826.
                </li>

                <li value="81" class="research-red" id="link83">
                    <a href="pdfs/research/81.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    De Rezende, L.F.M., Rey-López, J.P., Matsudo, V.K.R.,
                    do Carmo Luiz, O. (2014). Sedentary behavior and
                    health outcomes among older adults: a systematic
                    review. BMC Pub Health, 14, doi:10.1186/1471-2458-14-333.
                </li>

                <li value="82" class="research-red" id="link84">
                    <a href="http://cebp.aacrjournals.org/content/early/2015/06/30/1055-9965.EPI-15-0237.abstract"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Patel, A.P., Hildebrand, J.S., Campbell, P.T., Teras, L.R., Craft, L.L.,
                    McCullough, M.L. & Gapstur, S.M. (2015). Leisure-time spent sitting and
                    site-specific cancer incidence in a large US cohort. Cancer Epidemiology,
                    Biomarkers & Prevention, doi: 10.1158/1055-9965.EPI-15-0237.
                </li>

                <li value="83" class="research-red" id="link85">
                    <a href="pdfs/research/83.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Brocklebank, L.A., Falconer, C.A., Page, A.S., Perry, R. & Cooper, A.R. (2015).
                    Accelerometer-measured sedentary time and cardiometabolic biomarkers.
                    A systematic review. Preventive Medicine, 76, 92-102, doi:10.1016/j.ypmed.2015.04.013.
                </li>

                <li value="84" class="research-red" id="link86">
                    <a href="pdfs/research/84.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Rockette-Wagner, B., Edelstein, S., Venditti, E.M., Reddy, D., Bray, G.A., Carrion-Petersen,
                    M.L., … Kriska, A.M. & Diabetes Prevention Program Research Group. (2015). The impact of
                    lifestyle intervention on sedentary time in individuals at high risk of diabetes. Diabetologia,
                    58, 1198-1202.
                </li>

                <li value="85" class="research-red" id="link87">
                    <a href="pdfs/research/85.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Healy, G.N., Winkler, E.A.H., Brakenridge, C.L., Reeves, M.M. & Eakin, E.G. (2015).
                    Accelerometer-derived sedentary and physical activity time in overweight/obese adults
                    with type 2 diabetes: Cross-sectional associations with cardiometabolic biomarkers.
                    PLoS ONE 10: e0119140, doi:10.1371/journal.pone.0119140.
                </li>

                <li value="86" class="research-red" id="link88">
                    <a href="pdfs/research/86.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Costigan, S.A., Barnett, L., Plotnikoff, R.C. & Lubans, D.R. (2013). The health
                    indicators associated with screen-based sedentary behaviour among adolescent girls:
                    A systematic review. Journal of Adolescent Health, 52, 382-392.
                </li>

                <li value="87" class="research-red" id="link89">
                    <a href="pdfs/research/87.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Wijndaele, K., Healy, G.N., Dunstan, D.W., Barnett, A.G., Salmon, J.,
                    Shaw, J.E., Zimmet, P.Z. & Owen, N. (2010). Increased cardiometabolic
                    risk is associated with increased TV viewing time. Med Sci Sports Exerc,
                    42, 1511-8, doi: 10.1249/MSS.0b013e3181d322ac.
                </li>

                <li value="88" class="research-red" id="link90">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/25749843"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Lee, P.H. & Wong, F.K.Y. (2015). The association between time
                    spent in sedentary behaviors and blood pressure: a systematic
                    review and meta-analysis. Sports Medicine, 45, 867-880.
                </li>

                <li value="89" class="research-red" id="link91">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/18290829"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Aldington, S., Pritchard, A., Perrin, K., James, K., Wijesinghe,
                    M. & Beasley, R. (2008). Prolonged seated immobility at
                    work is a common risk factor for venous thromboembolism
                    leading to hospital admission. Intern Med J., 38, 133-135.
                </li>

                <li value="90" class="research-red" id="link92">
                    <a href="pdfs/research/90.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Kabrhel, C., Varraso, R., Goldhaber, S.Z., Rimm, E. & Camargo, C.A.Jr. (2011).
                    Physical inactivity and idiopathic pulmonary embolism in women: prospective study.
                    BMJ, 4, doi: 10.1136/bmj.d3867.
                </li>

                <li value="91" class="research-red" id="link95">
                    <a href="pdfs/research/91.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Healy, B., Levin, E., Perrin, K., Weatherall, M. & Beasley, R. (2010). Prolonged
                    work- and computer-related seated immobility and risk of venous thromboembolism.
                    J R Soc Med, 103, 447-454.
                </li>

                <li value="92" class="research-red" id="link96">
                    <a href="pdfs/research/92.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    West, J., Perrin, K., Aldington, S., Weatherall, M. & Beasley, R. (2008).
                    A case-control study of seated immobility at work as a risk factor
                    for venous thromboembolism. J R Soc Med, 101, 237-243.
                </li>

                <li value="95" class="research-red" id="link97">
                    <a href="pdfs/research/95.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Healy, G.N., Winkler, E.A.H., Owen, N., Anuradha,
                    S. & Dunstan, D.W. (2015). Replacing sitting time with standing or
                    stepping: associations with cardio-metabolic risk biomarkers.
                    European Heart Journal, 36, 2643-2649.
                </li>

                <li value="96" class="research-red" id="link98">
                    <a href="pdfs/research/96.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Teychenne, M., Costigan, S.A. & Parker, K. (2015). The association between
                    sedentary behaviour  and risk of anxiety: A systematic review. BMC Public Health,
                    15, doi: 10.1186/s12889-015-1843-x.
                </li>

                <li value="97" class="research-red" id="link99">
                    <a href="http://bjsm.bmj.com/content/49/11/705.abstract"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Zhai, L., Zhang, Y., & Zhang, D. (2015). Sedentary behaviour and the risk of
                    depression: a meta-analysis. Br J Sports Med, 49, 70-709.
                </li>

                <li value="98" class="research-red" id="link100">
                    <a href="pdfs/research/98.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Van Uffelen, J.G., van Gellecum, Y.R., Burton, N.W., Peeters, G., Heesch,
                    K.C. & Brown, W.J. (2013). Sitting-time, physical activity, and depressive
                    symptoms in mid-aged women. American Journal of Preventive Medicine, 45, 276-281.
                </li>

                <li value="99" class="research-red" id="link101">
                    <a href="pdfs/research/99.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Shu-Mei Chen, Mei-Fang Liu, Jill Cook, Shona Bass, Sing Kai Lo (2009).
                    Sedentary lifestyle as a risk factor for low back pain:
                    a systematic review.
                    International Archives of Occupational and Environmental Health, 82, 797-806.
                </li>

                <li value="100" class="research-red" id="link102">
                    <a href="pdfs/research/100.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    IJmker, S., Huysmans, M.A., Blatter, B.M., van der Beek, A.J., van Mechelen,
                    W. & Bongers, P.M. (2007). Should office workers spend fewer hours at their
                    computer? A systematic review of the literature. Occup Environ Med, 64, 211–222.
                </li>

                <li value="101" class="research-red" id="link103">
                    <a href="pdfs/research/101.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Gupta, N., Stordal Christiansen, C., Hallman, D.M., Korshoj, M., Gomes Carneiro, I.
                    & Holtermann, A. (2015). Is objectively measured sitting time associated with
                    low back pain? A cross-sectional investigation in the NOMAD study. PLoS One, 10, doi:
                    10.1371/journal.pone.0121159.
                </li>

                <li value="102" class="research-red" id="link104">
                    <a href="pdfs/research/102.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Chastin, S.F.M., Egerton, T., Leask, C. & Stamatakis, E. (2015).
                    Meta-analysis of the relationship    between breaks in sedentary
                    behaviour and cardiometabolic health. Obesity, 23, 1800-1810.
                </li>

                <li value="103" class="research-red" id="link105">
                    <a href="pdfs/research/103.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Peddie, M.C., Bone, J.L., Rehrer, N.J., Skeaff, C.M., Gray, A.R. & Perry, T.L. (2013).
                    Breaking prolonged sitting reduces postprandial glycemia in healthy, normal-weight
                    adults: A randomized crossover trial. Am J Clin Nutr, 98, 358-66.
                </li>

                <li value="104" class="research-red" id="link106">
                    <a href="pdfs/research/104.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Chau, J.Y., Grunseit, A.C., Chey, T., Stamatakis, E., Brown, W.J., Matthews, C.E.,
                    Bauman, A.E. & van der Ploeg, H.P. (2013). Daily sitting time and all-cause mortality:
                    A meta-analysis. Plos One, 8, doi:10.1371/journal.pone.0080000.
                </li>

                <li value="105" class="research-red" id="link107">
                    <a href="pdfs/research/105.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Schmid, D., Ricci, C. & Leitzmann, M.F. (2015). Associations of objectively assessed
                    physical activity and sedentary time with all-cause mortality in US adults:
                    the NHANES study. Plos One, 10: e0119591, doi: 10.1371/journal.pone.0119591.
                </li>

                <li value="106" class="research-red" id="link108">
                    <a href="pdfs/research/106.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Stamatakis, E., Chau, J.Y., Pedisic, Z., Bauman, A., Macniven, R., Coombs,
                    N. & Hamer, H. (2013). Are sitting occupations associated with increased all-cause,
                    cancer, and cardiovascular disease mortality risk? A pooled analysis of seven
                    British population cohorts. Plos One, 8:e73753. doi:10.1371/journal.pone.0073753.
                </li>

                <li value="107" class="research-red" id="link109">
                    <a href="pdfs/research/107.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Petersen, C.B., Bauman, A., Gronbaek, M., Helge, J.W., Thygesen, L.C. & Tolstrup,
                    J.S. (2014). Total sitting time and risk of myocardial infarction, coronary
                    heart disease and all-cause mortality in a prospective cohort of Danish adults.
                    International Journal of Behavioral Nutrition and Physical Activity, 11, doi:10.1186/1479-5868-11-13.
                </li>

                <li value="108" class="research-red" id="link110">
                    <a href="pdfs/research/108.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Lee, J., Kuk, J.L. & Ardern, C.I. (2015). The relationship between changes in sitting time
                    and mortality in post-menopausal US women. J Public Health, doi: 10.1093/pubmed/fdv055.
                </li>

                <li value="109" class="research-red" id="link111">
                    <a href="pdfs/research/109.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Van der Ploeg, H.P., Moller, S.V., Hannerz, H., van der Beek, A.J. & Holtermann, A. (2015).
                    Temporal changes in occupational sitting time in the Danish workforce and associations with
                    all-cause mortality: results from the Danish work environment cohort study. International
                    Journal of Behavioral Nutrition and Physical Activity, 12, doi:10.1186/s12966-015-0233-1.
                </li>

                <li value="110" class="research-red" id="link112">
                    <a href="pdfs/research/110.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Van der Ploeg, H.P., Chey, T., Ding, D., Chau, J.Y., Stamatakis, E. & Bauman, A.E. (2014).
                    Standing time and all-cause mortality in a large cohort of Australian adults.
                    Preventive Medicine, 69, 187-191.
                </li>

                <li value="111" class="research-red" id="link113">
                    <a href="pdfs/research/111.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Van der Ploeg, H.P., Chey, T., Korda, R.J., Banks, E. & Bauman, A. (2012). Sitting time
                    and all-cause mortality risk in 222 497 Australian adults. Arch Intern Med, 172, 494-500.
                </li>

                <li value="112" class="research-red" id="link114">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/25137367"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Thosar, S.S., Bielko, S.L., Mather, K.J., Johnston, J.D. & Wallace,
                    J.P. (2015). Effect of prolonged sitting and breaks in sitting time
                    on endothelial function. Med Sci Sports Exerc, 47, 843-9, doi: 10.1249/MSS.0000000000000479.
                </li>

                <li value="113" class="research-red" id="link115">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/26370881"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    McManus, A.M., Ainslie, P.N., Green, D.J., Simair, R.G., Smith, K. & Lewis, N. (2015).
                    Impact of prolonged sitting on vascular function in young girls. Exp Physiol, 100,
                    1379-87, doi: 10.1113/EP085355.
                </li>

                <li value="114" class="research-red" id="link116">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/21820466"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Vallance J.K, Winkler E.A, Gardiner, P.A,et al. (2011). Associations of
                    objectively-assessed physical activity and sedentary time with depression:
                    NHANES (2005–2006). Prev Med, 53, 284–8.
                </li>

                <li value="115" class="research-red" id="link117">
                    <a href="pdfs/research/115.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Liu, M., Wu, L. & Yao, S. (2015). Dose-response association of
                    screen time-based sedentary behaviour in children and adolescents and
                    depression: a meta-analysis of observational studies. Br J Sports
                    Med, 0, 1-8, doi:10.1136/bjsports-2015-095084.
                </li>

                <li value="116" class="research-red" id="link118">
                    <a href="pdfs/research/116.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Hallman, D.M., Gupta, N., Mathiassen, S.E. & Holtermann, A. (2015).
                    Association between objectively measured sitting time and neck-shoulder
                    pain among blue-collar workers. Int Arch Occup Environ Health, 88, 1031-1042.
                </li>

                <li value="117" class="research-red" id="link119">
                    <a href="pdfs/research/117.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Gracia-Marco, L., Rey-Lopez, J.P., Santaliestra-Pasias, A.M., Jimenez-Pavon,
                    D., Diaz, L.E., Moreno, L.A. & Vicente-Rodriguez, G. (2012). Sedentary behaviours
                    and its association with bone mass is adolescents : the HELENA cross-sectional study.
                    BMC Public Health, 12, 867-80, doi: 10.1007/s40279-015-0322-y.
                </li>

                <li value="118" class="research-red" id="link120">
                    <a href="pdfs/research/118.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Chastin, S.F.M., Mandrichenko, O. & Skelton, D. (2014). The frequency of osteogenic
                    activities and the pattern of intermittence between periods of physical activity and
                    sedentary behaviour affects bone mineral content: the cross-sectional NHANES study.
                    BMC Public Health, 14, 976-82, doi: 10.1016/j.numecd.2014.04.011.
                </li>

                <li value="119" class="research-red" id="link121">
                    <a href="http://www.ncbi.nlm.nih.gov/pubmed/25628179"
                       class="shortcode_button btn_small btn_type11" target="_blank">
                        Link
                    </a>
                    Matthews, C.E., Moore, S.C., Sampson, J., Blair, A., Xiao, Q., Keadle, S.K., Hollenbeck,
                    A. & Park, Y. (2015). Mortality benefits for replacing sitting time with different
                    physical activities. Med Sci Sports Exerc, 47, 1833-40, doi: 10.1249/MSS.0000000000000621.
                </li>

                <li value="120" class="research-red">
                    <a href="pdfs/research/120.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Stamatakis, E., Rogers, K., Ding, D., Berrigan, D., Chau, J., Hamer, M. & Bauman,
                    A. (2015). All-cause mortality effects of replacing sedentary time with physical activity
                    and sleeping using an isotemporal substitution model: a prospective study of 201,129 mid-aged
                    and older adults. International Journal of Behavioral Nutrition and Physical Activity, 12, DOI
                    10.1186/s12966-015-0280-7.
                </li>

                <li value="121" class="research-red">
                    <a href="pdfs/research/121.pdf" target="_blank">
                        <img src="img/general/icons/pdficon.png" alt="pdf"/>
                    </a>
                    Pulsford, R.M., Stamatakis, E., Britton, A.R., Brunner, E.J. & Hillsdon, M. (2015). Associations
                    of sitting behaviours with all-cause mortality over a 16-year follow up: the Whitehall II study.
                    International Journal of Epidemiology, 0, 1-8, doi: 10.1093/ije/dyv191.
                </li>


            </ol>

        </div> <!--referen-->


    </div><!-- .row-fluid -->

@endsection


@section('content-restofsmall')

    <img src="img/getstanding/usa/ads/message/standing.png" class="restofsmall-pic" alt="standing at work"/>

    <a href="http://onyourfeetday.com/america" class="darken" target="_blank">
        <img src="img/getstanding/usa/ads/oyf/oyf18.jpg" alt="oyf"/>
    </a>

    <a href="http://www.fellowes.com/sitstands" target="_blank">
        <img src="img/getstanding/usa/ads/supporters/fellowes-us.jpg" alt="sit-stand advert" /> <br/>
    </a>

    <!--
    <a href="aw_summit" class="darken">
        <img src="img/getstanding/usa/ads/summit2016-aw.jpg" alt="summit 2016"/>
    </a>
    -->

    <img src="img/getstanding/usa/ads/message/feelaftergreen.png" class="restofsmall-pic" alt="feel after"/>


@endsection


@section('footer-scripts')
    @parent
    <script type="text/javascript" src="js/shared/sliderscript-side.js"></script>
@endsection

