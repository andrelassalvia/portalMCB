<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class UnitedKingdomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukCitiesAndTowns = [

            [
                'nome' => "Aberaeron",
                'pais_id' => 245
            ],
            [
                'nome' => "Abercarn",
                'pais_id' => 245
            ],
            [
                'nome' => "Aberchirder",
                'pais_id' => 245
            ],
            [
                'nome' => "Abercynon",
                'pais_id' => 245
            ],
            [
                'nome' => "Aberdare / Aberdâr",
                'pais_id' => 245
            ],
            [
                'nome' => "Aberdeen",
                'pais_id' => 245
            ],
            [
                'nome' => "Aberfeldy",
                'pais_id' => 245
            ],
            [
                'nome' => "Abergavenny / Y Fenni",
                'pais_id' => 245
            ],
            [
                'nome' => "Abergele",
                'pais_id' => 245
            ],
            [
                'nome' => "Abersychan",
                'pais_id' => 245
            ],
            [
                'nome' => "Abertillery / Abertyleri",
                'pais_id' => 245
            ],
            [
                'nome' => "Aberystwyth",
                'pais_id' => 245
            ],
            [
                'nome' => "Abingdon-on-Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "Accrington",
                'pais_id' => 245
            ],
            [
                'nome' => "Acton",
                'pais_id' => 245
            ],
            [
                'nome' => "Addlestone",
                'pais_id' => 245
            ],
            [
                'nome' => "Adlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Adwick le Street",
                'pais_id' => 245
            ],
            [
                'nome' => "Airdrie",
                'pais_id' => 245
            ],
            [
                'nome' => "Alcester",
                'pais_id' => 245
            ],
            [
                'nome' => "Aldeburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Aldershot",
                'pais_id' => 245
            ],
            [
                'nome' => "Aldridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Alexandria",
                'pais_id' => 245
            ],
            [
                'nome' => "Alford",
                'pais_id' => 245
            ],
            [
                'nome' => "Alfreton",
                'pais_id' => 245
            ],
            [
                'nome' => "Alloa",
                'pais_id' => 245
            ],
            [
                'nome' => "Alness",
                'pais_id' => 245
            ],
            [
                'nome' => "Alnwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Alsager",
                'pais_id' => 245
            ],
            [
                'nome' => "Alston",
                'pais_id' => 245
            ],
            [
                'nome' => "Alton",
                'pais_id' => 245
            ],
            [
                'nome' => "Altrincham",
                'pais_id' => 245
            ],
            [
                'nome' => "Alva",
                'pais_id' => 245
            ],
            [
                'nome' => "Alyth",
                'pais_id' => 245
            ],
            [
                'nome' => "Amble",
                'pais_id' => 245
            ],
            [
                'nome' => "Ambleside",
                'pais_id' => 245
            ],
            [
                'nome' => "Amersham",
                'pais_id' => 245
            ],
            [
                'nome' => "Amesbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Amlwch",
                'pais_id' => 245
            ],
            [
                'nome' => "Ammanford / Rhydaman",
                'pais_id' => 245
            ],
            [
                'nome' => "Ampthill",
                'pais_id' => 245
            ],
            [
                'nome' => "Andover",
                'pais_id' => 245
            ],
            [
                'nome' => "Annan",
                'pais_id' => 245
            ],
            [
                'nome' => "Annfield Plain",
                'pais_id' => 245
            ],
            [
                'nome' => "Anstruther",
                'pais_id' => 245
            ],
            [
                'nome' => "Antrim",
                'pais_id' => 245
            ],
            [
                'nome' => "Appleby-in-Westmorland",
                'pais_id' => 245
            ],
            [
                'nome' => "Arbroath",
                'pais_id' => 245
            ],
            [
                'nome' => "Ardrossan",
                'pais_id' => 245
            ],
            [
                'nome' => "Armadale",
                'pais_id' => 245
            ],
            [
                'nome' => "Armagh",
                'pais_id' => 245
            ],
            [
                'nome' => "Arnold",
                'pais_id' => 245
            ],
            [
                'nome' => "Arundel",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashbourne",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashburton",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashby-de-la-Zouch",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashford",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashford",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashington",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashton-in-Makerfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Ashton-under-Lyne",
                'pais_id' => 245
            ],
            [
                'nome' => "Aspatria",
                'pais_id' => 245
            ],
            [
                'nome' => "Atherstone",
                'pais_id' => 245
            ],
            [
                'nome' => "Atherton",
                'pais_id' => 245
            ],
            [
                'nome' => "Attleborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Auchterarder",
                'pais_id' => 245
            ],
            [
                'nome' => "Auchtermuchty",
                'pais_id' => 245
            ],
            [
                'nome' => "Aviemore",
                'pais_id' => 245
            ],
            [
                'nome' => "Axbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Axminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Aylesbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Aylsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Ayr",
                'pais_id' => 245
            ],
            [
                'nome' => "Bacup",
                'pais_id' => 245
            ],
            [
                'nome' => "Baildon",
                'pais_id' => 245
            ],
            [
                'nome' => "Bakewell",
                'pais_id' => 245
            ],
            [
                'nome' => "Baldock",
                'pais_id' => 245
            ],
            [
                'nome' => "Ballater",
                'pais_id' => 245
            ],
            [
                'nome' => "Ballycastle",
                'pais_id' => 245
            ],
            [
                'nome' => "Ballyclare",
                'pais_id' => 245
            ],
            [
                'nome' => "Ballymena",
                'pais_id' => 245
            ],
            [
                'nome' => "Ballymoney",
                'pais_id' => 245
            ],
            [
                'nome' => "Ballynahinch",
                'pais_id' => 245
            ],
            [
                'nome' => "Bamber Bridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Banbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Banbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Banchory",
                'pais_id' => 245
            ],
            [
                'nome' => "Banff",
                'pais_id' => 245
            ],
            [
                'nome' => "Bangor",
                'pais_id' => 245
            ],
            [
                'nome' => "Bangor",
                'pais_id' => 245
            ],
            [
                'nome' => "Banstead",
                'pais_id' => 245
            ],
            [
                'nome' => "Bargod / Bargoed",
                'pais_id' => 245
            ],
            [
                'nome' => "Barmouth / Abermaw",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnard Castle",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnoldswick",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnsley",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnstaple",
                'pais_id' => 245
            ],
            [
                'nome' => "Barrhead",
                'pais_id' => 245
            ],
            [
                'nome' => "Barrowford",
                'pais_id' => 245
            ],
            [
                'nome' => "Barrow-in-Furness",
                'pais_id' => 245
            ],
            [
                'nome' => "Barry / Barri",
                'pais_id' => 245
            ],
            [
                'nome' => "Barton-upon-Humber",
                'pais_id' => 245
            ],
            [
                'nome' => "Basildon",
                'pais_id' => 245
            ],
            [
                'nome' => "Basingstoke",
                'pais_id' => 245
            ],
            [
                'nome' => "Bath",
                'pais_id' => 245
            ],
            [
                'nome' => "Bathgate",
                'pais_id' => 245
            ],
            [
                'nome' => "Batley",
                'pais_id' => 245
            ],
            [
                'nome' => "Battle",
                'pais_id' => 245
            ],
            [
                'nome' => "Bawtry",
                'pais_id' => 245
            ],
            [
                'nome' => "Beaconsfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Beaminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Bearsden",
                'pais_id' => 245
            ],
            [
                'nome' => "Beaumaris",
                'pais_id' => 245
            ],
            [
                'nome' => "Bebington",
                'pais_id' => 245
            ],
            [
                'nome' => "Beccles",
                'pais_id' => 245
            ],
            [
                'nome' => "Bedale",
                'pais_id' => 245
            ],
            [
                'nome' => "Bedford",
                'pais_id' => 245
            ],
            [
                'nome' => "Bedlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Bedworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Beeston",
                'pais_id' => 245
            ],
            [
                'nome' => "Belfast",
                'pais_id' => 245
            ],
            [
                'nome' => "Bellshill",
                'pais_id' => 245
            ],
            [
                'nome' => "Belper",
                'pais_id' => 245
            ],
            [
                'nome' => "Bentley",
                'pais_id' => 245
            ],
            [
                'nome' => "Berkhamsted",
                'pais_id' => 245
            ],
            [
                'nome' => "Berwick-upon-Tweed",
                'pais_id' => 245
            ],
            [
                'nome' => "Bethesda",
                'pais_id' => 245
            ],
            [
                'nome' => "Betws-y-Coed",
                'pais_id' => 245
            ],
            [
                'nome' => "Beverley",
                'pais_id' => 245
            ],
            [
                'nome' => "Bewdley",
                'pais_id' => 245
            ],
            [
                'nome' => "Bexhill",
                'pais_id' => 245
            ],
            [
                'nome' => "Bicester",
                'pais_id' => 245
            ],
            [
                'nome' => "Biddulph",
                'pais_id' => 245
            ],
            [
                'nome' => "Bideford",
                'pais_id' => 245
            ],
            [
                'nome' => "Biggar",
                'pais_id' => 245
            ],
            [
                'nome' => "Biggleswade",
                'pais_id' => 245
            ],
            [
                'nome' => "Billericay",
                'pais_id' => 245
            ],
            [
                'nome' => "Billinge",
                'pais_id' => 245
            ],
            [
                'nome' => "Billingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Bilston",
                'pais_id' => 245
            ],
            [
                'nome' => "Bingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Bingley",
                'pais_id' => 245
            ],
            [
                'nome' => "Birkenhead",
                'pais_id' => 245
            ],
            [
                'nome' => "Birmingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Bishop Auckland",
                'pais_id' => 245
            ],
            [
                'nome' => "Bishopbriggs",
                'pais_id' => 245
            ],
            [
                'nome' => "Bishop's Castle",
                'pais_id' => 245
            ],
            [
                'nome' => "Bishop's Stortford",
                'pais_id' => 245
            ],
            [
                'nome' => "Bishop's Waltham",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackheath",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackpool",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackwater",
                'pais_id' => 245
            ],
            [
                'nome' => "Blackwood / Y Coed Duon",
                'pais_id' => 245
            ],
            [
                'nome' => "Blaenau Ffestiniog",
                'pais_id' => 245
            ],
            [
                'nome' => "Blaenavon",
                'pais_id' => 245
            ],
            [
                'nome' => "Blaina / Y Blaenau",
                'pais_id' => 245
            ],
            [
                'nome' => "Blairgowrie and Rattray",
                'pais_id' => 245
            ],
            [
                'nome' => "Blandford Forum",
                'pais_id' => 245
            ],
            [
                'nome' => "Blaydon",
                'pais_id' => 245
            ],
            [
                'nome' => "Bletchley",
                'pais_id' => 245
            ],
            [
                'nome' => "Bloxwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Blyth",
                'pais_id' => 245
            ],
            [
                'nome' => "Bodmin",
                'pais_id' => 245
            ],
            [
                'nome' => "Bognor Regis",
                'pais_id' => 245
            ],
            [
                'nome' => "Bollington",
                'pais_id' => 245
            ],
            [
                'nome' => "Bolsover",
                'pais_id' => 245
            ],
            [
                'nome' => "Bolton",
                'pais_id' => 245
            ],
            [
                'nome' => "Bolton upon Dearne",
                'pais_id' => 245
            ],
            [
                'nome' => "Bo'ness",
                'pais_id' => 245
            ],
            [
                'nome' => "Bonnyrigg",
                'pais_id' => 245
            ],
            [
                'nome' => "Bootle",
                'pais_id' => 245
            ],
            [
                'nome' => "Bordon",
                'pais_id' => 245
            ],
            [
                'nome' => "Borehamwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Boroughbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Boston",
                'pais_id' => 245
            ],
            [
                'nome' => "Bourne",
                'pais_id' => 245
            ],
            [
                'nome' => "Bournemouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Bovey Tracey",
                'pais_id' => 245
            ],
            [
                'nome' => "Bowness-on-Windermere",
                'pais_id' => 245
            ],
            [
                'nome' => "Brackley",
                'pais_id' => 245
            ],
            [
                'nome' => "Bracknell",
                'pais_id' => 245
            ],
            [
                'nome' => "Bradford",
                'pais_id' => 245
            ],
            [
                'nome' => "Bradford-on-Avon",
                'pais_id' => 245
            ],
            [
                'nome' => "Brading",
                'pais_id' => 245
            ],
            [
                'nome' => "Bradley Stoke",
                'pais_id' => 245
            ],
            [
                'nome' => "Braintree",
                'pais_id' => 245
            ],
            [
                'nome' => "Bramhall",
                'pais_id' => 245
            ],
            [
                'nome' => "Brampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Brandon",
                'pais_id' => 245
            ],
            [
                'nome' => "Brechin",
                'pais_id' => 245
            ],
            [
                'nome' => "Brecon / Aberhonddu",
                'pais_id' => 245
            ],
            [
                'nome' => "Brentwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Bridgend / Pen-y-bont ar Ogwr",
                'pais_id' => 245
            ],
            [
                'nome' => "Bridge of Allan",
                'pais_id' => 245
            ],
            [
                'nome' => "Bridgnorth",
                'pais_id' => 245
            ],
            [
                'nome' => "Bridgwater",
                'pais_id' => 245
            ],
            [
                'nome' => "Bridlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Bridport",
                'pais_id' => 245
            ],
            [
                'nome' => "Brierfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Brierley Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Brigg",
                'pais_id' => 245
            ],
            [
                'nome' => "Brighouse",
                'pais_id' => 245
            ],
            [
                'nome' => "Brightlingsea",
                'pais_id' => 245
            ],
            [
                'nome' => "Brighton and Hove",
                'pais_id' => 245
            ],
            [
                'nome' => "Bristol",
                'pais_id' => 245
            ],
            [
                'nome' => "Brixham",
                'pais_id' => 245
            ],
            [
                'nome' => "Broadstairs",
                'pais_id' => 245
            ],
            [
                'nome' => "Bromsgrove",
                'pais_id' => 245
            ],
            [
                'nome' => "Bromyard",
                'pais_id' => 245
            ],
            [
                'nome' => "Broseley",
                'pais_id' => 245
            ],
            [
                'nome' => "Brotton",
                'pais_id' => 245
            ],
            [
                'nome' => "Broughton in Furness",
                'pais_id' => 245
            ],
            [
                'nome' => "Broughty Ferry",
                'pais_id' => 245
            ],
            [
                'nome' => "Brownhills",
                'pais_id' => 245
            ],
            [
                'nome' => "Broxburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Bruton",
                'pais_id' => 245
            ],
            [
                'nome' => "Brynmawr / Bryn-Mawr",
                'pais_id' => 245
            ],
            [
                'nome' => "Buckfastleigh",
                'pais_id' => 245
            ],
            [
                'nome' => "Buckhaven",
                'pais_id' => 245
            ],
            [
                'nome' => "Buckie",
                'pais_id' => 245
            ],
            [
                'nome' => "Buckingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Buckley / Bwcle",
                'pais_id' => 245
            ],
            [
                'nome' => "Bude",
                'pais_id' => 245
            ],
            [
                'nome' => "Budleigh Salterton",
                'pais_id' => 245
            ],
            [
                'nome' => "Builth Wells / Llanfair-ym-Muallt",
                'pais_id' => 245
            ],
            [
                'nome' => "Bungay",
                'pais_id' => 245
            ],
            [
                'nome' => "Buntingford",
                'pais_id' => 245
            ],
            [
                'nome' => "Burford",
                'pais_id' => 245
            ],
            [
                'nome' => "Burgess Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Burghead",
                'pais_id' => 245
            ],
            [
                'nome' => "Burnham-on-Crouch",
                'pais_id' => 245
            ],
            [
                'nome' => "Burnham-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Burnley",
                'pais_id' => 245
            ],
            [
                'nome' => "Burntisland",
                'pais_id' => 245
            ],
            [
                'nome' => "Burntwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Burry Port / Porth Tywyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Burton Latimer",
                'pais_id' => 245
            ],
            [
                'nome' => "Burton upon Trent",
                'pais_id' => 245
            ],
            [
                'nome' => "Bury",
                'pais_id' => 245
            ],
            [
                'nome' => "Bury St Edmunds",
                'pais_id' => 245
            ],
            [
                'nome' => "Bushey",
                'pais_id' => 245
            ],
            [
                'nome' => "Buxton",
                'pais_id' => 245
            ],
            [
                'nome' => "Caerleon / Caerllion",
                'pais_id' => 245
            ],
            [
                'nome' => "Caernarfon",
                'pais_id' => 245
            ],
            [
                'nome' => "Caerphilly / Caerffili",
                'pais_id' => 245
            ],
            [
                'nome' => "Caerwys",
                'pais_id' => 245
            ],
            [
                'nome' => "Caister-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Caldicot / Cil-y-coed",
                'pais_id' => 245
            ],
            [
                'nome' => "Callander",
                'pais_id' => 245
            ],
            [
                'nome' => "Callington",
                'pais_id' => 245
            ],
            [
                'nome' => "Calne",
                'pais_id' => 245
            ],
            [
                'nome' => "Camberley",
                'pais_id' => 245
            ],
            [
                'nome' => "Camborne",
                'pais_id' => 245
            ],
            [
                'nome' => "Cambridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Camelford",
                'pais_id' => 245
            ],
            [
                'nome' => "Campbeltown / Ceann Loch Chille Chiarain",
                'pais_id' => 245
            ],
            [
                'nome' => "Cannock",
                'pais_id' => 245
            ],
            [
                'nome' => "Canterbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Canvey Island",
                'pais_id' => 245
            ],
            [
                'nome' => "Cardiff / Caerdydd",
                'pais_id' => 245
            ],
            [
                'nome' => "Cardigan / Aberteifi",
                'pais_id' => 245
            ],
            [
                'nome' => "Carlisle",
                'pais_id' => 245
            ],
            [
                'nome' => "Carluke",
                'pais_id' => 245
            ],
            [
                'nome' => "Carmarthen / Caerfyrddin",
                'pais_id' => 245
            ],
            [
                'nome' => "Carnforth",
                'pais_id' => 245
            ],
            [
                'nome' => "Carnoustie",
                'pais_id' => 245
            ],
            [
                'nome' => "Carrickfergus",
                'pais_id' => 245
            ],
            [
                'nome' => "Carryduff",
                'pais_id' => 245
            ],
            [
                'nome' => "Carterton",
                'pais_id' => 245
            ],
            [
                'nome' => "Castle Cary",
                'pais_id' => 245
            ],
            [
                'nome' => "Castle Douglas",
                'pais_id' => 245
            ],
            [
                'nome' => "Castleford",
                'pais_id' => 245
            ],
            [
                'nome' => "Castletown",
                'pais_id' => 245
            ],
            [
                'nome' => "Caterham",
                'pais_id' => 245
            ],
            [
                'nome' => "Chadderton",
                'pais_id' => 245
            ],
            [
                'nome' => "Chagford",
                'pais_id' => 245
            ],
            [
                'nome' => "Chapel-en-le-Frith",
                'pais_id' => 245
            ],
            [
                'nome' => "Chard",
                'pais_id' => 245
            ],
            [
                'nome' => "Charlbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Charlestown of Aberlour",
                'pais_id' => 245
            ],
            [
                'nome' => "Chatham",
                'pais_id' => 245
            ],
            [
                'nome' => "Chatteris",
                'pais_id' => 245
            ],
            [
                'nome' => "Cheadle",
                'pais_id' => 245
            ],
            [
                'nome' => "Cheadle",
                'pais_id' => 245
            ],
            [
                'nome' => "Cheadle Hulme",
                'pais_id' => 245
            ],
            [
                'nome' => "Chelmsford",
                'pais_id' => 245
            ],
            [
                'nome' => "Cheltenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Chepstow / Cas-Gwent",
                'pais_id' => 245
            ],
            [
                'nome' => "Chertsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Chesham",
                'pais_id' => 245
            ],
            [
                'nome' => "Cheshunt",
                'pais_id' => 245
            ],
            [
                'nome' => "Chester",
                'pais_id' => 245
            ],
            [
                'nome' => "Chesterfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Chester-le-Street",
                'pais_id' => 245
            ],
            [
                'nome' => "Chichester",
                'pais_id' => 245
            ],
            [
                'nome' => "Chickerell",
                'pais_id' => 245
            ],
            [
                'nome' => "Chigwell",
                'pais_id' => 245
            ],
            [
                'nome' => "Chippenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Chipping Campden",
                'pais_id' => 245
            ],
            [
                'nome' => "Chipping Norton",
                'pais_id' => 245
            ],
            [
                'nome' => "Chipping Ongar",
                'pais_id' => 245
            ],
            [
                'nome' => "Chipping Sodbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Chirk / Y Waun",
                'pais_id' => 245
            ],
            [
                'nome' => "Chorley",
                'pais_id' => 245
            ],
            [
                'nome' => "Chorleywood",
                'pais_id' => 245
            ],
            [
                'nome' => "Christchurch",
                'pais_id' => 245
            ],
            [
                'nome' => "Chudleigh",
                'pais_id' => 245
            ],
            [
                'nome' => "Church",
                'pais_id' => 245
            ],
            [
                'nome' => "Church Stretton",
                'pais_id' => 245
            ],
            [
                'nome' => "Cinderford",
                'pais_id' => 245
            ],
            [
                'nome' => "Cirencester",
                'pais_id' => 245
            ],
            [
                'nome' => "Clackmannan",
                'pais_id' => 245
            ],
            [
                'nome' => "Clacton-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Clare",
                'pais_id' => 245
            ],
            [
                'nome' => "Clay Cross",
                'pais_id' => 245
            ],
            [
                'nome' => "Clayton-le-Moors",
                'pais_id' => 245
            ],
            [
                'nome' => "Cleator Moor",
                'pais_id' => 245
            ],
            [
                'nome' => "Cleckheaton",
                'pais_id' => 245
            ],
            [
                'nome' => "Cleethorpes",
                'pais_id' => 245
            ],
            [
                'nome' => "Cleobury Mortimer",
                'pais_id' => 245
            ],
            [
                'nome' => "Clevedon",
                'pais_id' => 245
            ],
            [
                'nome' => "Cleveleys",
                'pais_id' => 245
            ],
            [
                'nome' => "Clitheroe",
                'pais_id' => 245
            ],
            [
                'nome' => "Clydebank",
                'pais_id' => 245
            ],
            [
                'nome' => "Coalisland",
                'pais_id' => 245
            ],
            [
                'nome' => "Coalville",
                'pais_id' => 245
            ],
            [
                'nome' => "Coatbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Cockenzie and Port Seton",
                'pais_id' => 245
            ],
            [
                'nome' => "Cockermouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Coggeshall",
                'pais_id' => 245
            ],
            [
                'nome' => "Colchester",
                'pais_id' => 245
            ],
            [
                'nome' => "Coldstream",
                'pais_id' => 245
            ],
            [
                'nome' => "Coleford",
                'pais_id' => 245
            ],
            [
                'nome' => "Coleraine",
                'pais_id' => 245
            ],
            [
                'nome' => "Coleshill",
                'pais_id' => 245
            ],
            [
                'nome' => "Colne",
                'pais_id' => 245
            ],
            [
                'nome' => "Colwyn Bay / Bae Colwyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Colyton",
                'pais_id' => 245
            ],
            [
                'nome' => "Comber",
                'pais_id' => 245
            ],
            [
                'nome' => "Congleton",
                'pais_id' => 245
            ],
            [
                'nome' => "Conisbrough",
                'pais_id' => 245
            ],
            [
                'nome' => "Connah's Quay / Cei Connah",
                'pais_id' => 245
            ],
            [
                'nome' => "Consett",
                'pais_id' => 245
            ],
            [
                'nome' => "Conwy",
                'pais_id' => 245
            ],
            [
                'nome' => "Cookstown",
                'pais_id' => 245
            ],
            [
                'nome' => "Corbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Corby",
                'pais_id' => 245
            ],
            [
                'nome' => "Corsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Coseley",
                'pais_id' => 245
            ],
            [
                'nome' => "Cotgrave",
                'pais_id' => 245
            ],
            [
                'nome' => "Cottingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Coupar Angus",
                'pais_id' => 245
            ],
            [
                'nome' => "Coventry",
                'pais_id' => 245
            ],
            [
                'nome' => "Cowbridge / Y Bont-Faen",
                'pais_id' => 245
            ],
            [
                'nome' => "Cowdenbeath",
                'pais_id' => 245
            ],
            [
                'nome' => "Cowes",
                'pais_id' => 245
            ],
            [
                'nome' => "Craigavon",
                'pais_id' => 245
            ],
            [
                'nome' => "Crail",
                'pais_id' => 245
            ],
            [
                'nome' => "Cramlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Craven Arms",
                'pais_id' => 245
            ],
            [
                'nome' => "Crawley",
                'pais_id' => 245
            ],
            [
                'nome' => "Crediton",
                'pais_id' => 245
            ],
            [
                'nome' => "Crewe",
                'pais_id' => 245
            ],
            [
                'nome' => "Crewkerne",
                'pais_id' => 245
            ],
            [
                'nome' => "Criccieth / Cricieth",
                'pais_id' => 245
            ],
            [
                'nome' => "Crickhowell / Crughywel",
                'pais_id' => 245
            ],
            [
                'nome' => "Cricklade",
                'pais_id' => 245
            ],
            [
                'nome' => "Crieff",
                'pais_id' => 245
            ],
            [
                'nome' => "Cromarty",
                'pais_id' => 245
            ],
            [
                'nome' => "Cromer",
                'pais_id' => 245
            ],
            [
                'nome' => "Crook",
                'pais_id' => 245
            ],
            [
                'nome' => "Crosby",
                'pais_id' => 245
            ],
            [
                'nome' => "Crowborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Crowland",
                'pais_id' => 245
            ],
            [
                'nome' => "Crowle",
                'pais_id' => 245
            ],
            [
                'nome' => "Crowthorne",
                'pais_id' => 245
            ],
            [
                'nome' => "Cuckfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Cullen",
                'pais_id' => 245
            ],
            [
                'nome' => "Cullompton",
                'pais_id' => 245
            ],
            [
                'nome' => "Culross",
                'pais_id' => 245
            ],
            [
                'nome' => "Cumbernauld",
                'pais_id' => 245
            ],
            [
                'nome' => "Cumnock",
                'pais_id' => 245
            ],
            [
                'nome' => "Cupar",
                'pais_id' => 245
            ],
            [
                'nome' => "Cwmbrân",
                'pais_id' => 245
            ],
            [
                'nome' => "Dalbeattie",
                'pais_id' => 245
            ],
            [
                'nome' => "Dalkeith",
                'pais_id' => 245
            ],
            [
                'nome' => "Dalton-in-Furness",
                'pais_id' => 245
            ],
            [
                'nome' => "Darlaston",
                'pais_id' => 245
            ],
            [
                'nome' => "Darley Dale",
                'pais_id' => 245
            ],
            [
                'nome' => "Darlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Dartford",
                'pais_id' => 245
            ],
            [
                'nome' => "Dartmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Darvel",
                'pais_id' => 245
            ],
            [
                'nome' => "Darwen",
                'pais_id' => 245
            ],
            [
                'nome' => "Daventry",
                'pais_id' => 245
            ],
            [
                'nome' => "Dawlish",
                'pais_id' => 245
            ],
            [
                'nome' => "Deal",
                'pais_id' => 245
            ],
            [
                'nome' => "Denbigh / Dinbych",
                'pais_id' => 245
            ],
            [
                'nome' => "Denny",
                'pais_id' => 245
            ],
            [
                'nome' => "Denton",
                'pais_id' => 245
            ],
            [
                'nome' => "Derby",
                'pais_id' => 245
            ],
            [
                'nome' => "Dereham",
                'pais_id' => 245
            ],
            [
                'nome' => "Derry / Londonderry",
                'pais_id' => 245
            ],
            [
                'nome' => "Desborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Devizes",
                'pais_id' => 245
            ],
            [
                'nome' => "Dewsbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Didcot",
                'pais_id' => 245
            ],
            [
                'nome' => "Dingwall",
                'pais_id' => 245
            ],
            [
                'nome' => "Dinnington",
                'pais_id' => 245
            ],
            [
                'nome' => "Diss",
                'pais_id' => 245
            ],
            [
                'nome' => "Dolgellau",
                'pais_id' => 245
            ],
            [
                'nome' => "Dollar",
                'pais_id' => 245
            ],
            [
                'nome' => "Donaghadee",
                'pais_id' => 245
            ],
            [
                'nome' => "Doncaster",
                'pais_id' => 245
            ],
            [
                'nome' => "Dorchester",
                'pais_id' => 245
            ],
            [
                'nome' => "Dorking",
                'pais_id' => 245
            ],
            [
                'nome' => "Dornoch",
                'pais_id' => 245
            ],
            [
                'nome' => "Douglas",
                'pais_id' => 245
            ],
            [
                'nome' => "Doune",
                'pais_id' => 245
            ],
            [
                'nome' => "Dover",
                'pais_id' => 245
            ],
            [
                'nome' => "Downham Market",
                'pais_id' => 245
            ],
            [
                'nome' => "Downpatrick",
                'pais_id' => 245
            ],
            [
                'nome' => "Driffield",
                'pais_id' => 245
            ],
            [
                'nome' => "Droitwich Spa",
                'pais_id' => 245
            ],
            [
                'nome' => "Dromore ",
                'pais_id' => 245
            ],
            [
                'nome' => "Dronfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Droylsden",
                'pais_id' => 245
            ],
            [
                'nome' => "Dudley",
                'pais_id' => 245
            ],
            [
                'nome' => "Dufftown",
                'pais_id' => 245
            ],
            [
                'nome' => "Dukinfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Dulverton",
                'pais_id' => 245
            ],
            [
                'nome' => "Dumbarton",
                'pais_id' => 245
            ],
            [
                'nome' => "Dumfries",
                'pais_id' => 245
            ],
            [
                'nome' => "Dunbar",
                'pais_id' => 245
            ],
            [
                'nome' => "Dunblane",
                'pais_id' => 245
            ],
            [
                'nome' => "Dundee",
                'pais_id' => 245
            ],
            [
                'nome' => "Dundonald",
                'pais_id' => 245
            ],
            [
                'nome' => "Dunfermline",
                'pais_id' => 245
            ],
            [
                'nome' => "Dungannon",
                'pais_id' => 245
            ],
            [
                'nome' => "Dunmurry",
                'pais_id' => 245
            ],
            [
                'nome' => "Dunoon / Dùn Obhainn",
                'pais_id' => 245
            ],
            [
                'nome' => "Duns",
                'pais_id' => 245
            ],
            [
                'nome' => "Dunstable",
                'pais_id' => 245
            ],
            [
                'nome' => "Durham",
                'pais_id' => 245
            ],
            [
                'nome' => "Dursley",
                'pais_id' => 245
            ],
            [
                'nome' => "Earby",
                'pais_id' => 245
            ],
            [
                'nome' => "Earl Shilton",
                'pais_id' => 245
            ],
            [
                'nome' => "Easingwold",
                'pais_id' => 245
            ],
            [
                'nome' => "Eastbourne",
                'pais_id' => 245
            ],
            [
                'nome' => "East Cowes",
                'pais_id' => 245
            ],
            [
                'nome' => "East Grinstead",
                'pais_id' => 245
            ],
            [
                'nome' => "East Kilbride",
                'pais_id' => 245
            ],
            [
                'nome' => "Eastleigh",
                'pais_id' => 245
            ],
            [
                'nome' => "East Linton",
                'pais_id' => 245
            ],
            [
                'nome' => "Eastwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Ebbw Vale / Glyn Ebwy",
                'pais_id' => 245
            ],
            [
                'nome' => "Eccles",
                'pais_id' => 245
            ],
            [
                'nome' => "Eccleshall",
                'pais_id' => 245
            ],
            [
                'nome' => "Edenbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Edinburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Egham",
                'pais_id' => 245
            ],
            [
                'nome' => "Egremont",
                'pais_id' => 245
            ],
            [
                'nome' => "Elgin",
                'pais_id' => 245
            ],
            [
                'nome' => "Elland",
                'pais_id' => 245
            ],
            [
                'nome' => "Ellesmere",
                'pais_id' => 245
            ],
            [
                'nome' => "Ellesmere Port",
                'pais_id' => 245
            ],
            [
                'nome' => "Ellon",
                'pais_id' => 245
            ],
            [
                'nome' => "Ely",
                'pais_id' => 245
            ],
            [
                'nome' => "Emsworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Enniskillen",
                'pais_id' => 245
            ],
            [
                'nome' => "Epping",
                'pais_id' => 245
            ],
            [
                'nome' => "Epsom",
                'pais_id' => 245
            ],
            [
                'nome' => "Epworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Erskine",
                'pais_id' => 245
            ],
            [
                'nome' => "Esher",
                'pais_id' => 245
            ],
            [
                'nome' => "Eton",
                'pais_id' => 245
            ],
            [
                'nome' => "Evesham",
                'pais_id' => 245
            ],
            [
                'nome' => "Ewell",
                'pais_id' => 245
            ],
            [
                'nome' => "Exeter",
                'pais_id' => 245
            ],
            [
                'nome' => "Exmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Eye",
                'pais_id' => 245
            ],
            [
                'nome' => "Eyemouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Failsworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Fairford",
                'pais_id' => 245
            ],
            [
                'nome' => "Fakenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Falkirk",
                'pais_id' => 245
            ],
            [
                'nome' => "Falkland",
                'pais_id' => 245
            ],
            [
                'nome' => "Falmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Fareham",
                'pais_id' => 245
            ],
            [
                'nome' => "Faringdon",
                'pais_id' => 245
            ],
            [
                'nome' => "Farnborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Farnham",
                'pais_id' => 245
            ],
            [
                'nome' => "Farnworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Faversham",
                'pais_id' => 245
            ],
            [
                'nome' => "Fazeley",
                'pais_id' => 245
            ],
            [
                'nome' => "Featherstone",
                'pais_id' => 245
            ],
            [
                'nome' => "Felixstowe",
                'pais_id' => 245
            ],
            [
                'nome' => "Ferndale",
                'pais_id' => 245
            ],
            [
                'nome' => "Ferndown",
                'pais_id' => 245
            ],
            [
                'nome' => "Ferryhill",
                'pais_id' => 245
            ],
            [
                'nome' => "Filey",
                'pais_id' => 245
            ],
            [
                'nome' => "Filton",
                'pais_id' => 245
            ],
            [
                'nome' => "Findochty",
                'pais_id' => 245
            ],
            [
                'nome' => "Fishguard / Abergwaun",
                'pais_id' => 245
            ],
            [
                'nome' => "Fleet",
                'pais_id' => 245
            ],
            [
                'nome' => "Fleetwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Flint / Y Fflint",
                'pais_id' => 245
            ],
            [
                'nome' => "Flitwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Folkestone",
                'pais_id' => 245
            ],
            [
                'nome' => "Fordingbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Forfar",
                'pais_id' => 245
            ],
            [
                'nome' => "Formby",
                'pais_id' => 245
            ],
            [
                'nome' => "Forres",
                'pais_id' => 245
            ],
            [
                'nome' => "Fortrose",
                'pais_id' => 245
            ],
            [
                'nome' => "Fortuneswell",
                'pais_id' => 245
            ],
            [
                'nome' => "Fort William / An Gearasdan",
                'pais_id' => 245
            ],
            [
                'nome' => "Fowey",
                'pais_id' => 245
            ],
            [
                'nome' => "Framlingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Fraserburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Freckleton",
                'pais_id' => 245
            ],
            [
                'nome' => "Frimley",
                'pais_id' => 245
            ],
            [
                'nome' => "Frinton-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Frodsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Frome",
                'pais_id' => 245
            ],
            [
                'nome' => "Fulwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Gainsborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Galashiels",
                'pais_id' => 245
            ],
            [
                'nome' => "Galston",
                'pais_id' => 245
            ],
            [
                'nome' => "Garforth",
                'pais_id' => 245
            ],
            [
                'nome' => "Garstang",
                'pais_id' => 245
            ],
            [
                'nome' => "Gatehouse of Fleet",
                'pais_id' => 245
            ],
            [
                'nome' => "Gateshead",
                'pais_id' => 245
            ],
            [
                'nome' => "Gatley",
                'pais_id' => 245
            ],
            [
                'nome' => "Gerrards Cross",
                'pais_id' => 245
            ],
            [
                'nome' => "Gillingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Gillingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Girvan",
                'pais_id' => 245
            ],
            [
                'nome' => "Glasgow",
                'pais_id' => 245
            ],
            [
                'nome' => "Glastonbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Glenrothes",
                'pais_id' => 245
            ],
            [
                'nome' => "Glossop",
                'pais_id' => 245
            ],
            [
                'nome' => "Gloucester",
                'pais_id' => 245
            ],
            [
                'nome' => "Glyn-neath / Glyn-nedd",
                'pais_id' => 245
            ],
            [
                'nome' => "Godalming",
                'pais_id' => 245
            ],
            [
                'nome' => "Godmanchester",
                'pais_id' => 245
            ],
            [
                'nome' => "Golborne",
                'pais_id' => 245
            ],
            [
                'nome' => "Goldthorpe",
                'pais_id' => 245
            ],
            [
                'nome' => "Goodwick / Wdig",
                'pais_id' => 245
            ],
            [
                'nome' => "Goole",
                'pais_id' => 245
            ],
            [
                'nome' => "Gorleston-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Gorseinon",
                'pais_id' => 245
            ],
            [
                'nome' => "Gosport",
                'pais_id' => 245
            ],
            [
                'nome' => "Gourock",
                'pais_id' => 245
            ],
            [
                'nome' => "Grangemouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Grange-over-Sands",
                'pais_id' => 245
            ],
            [
                'nome' => "Grantham",
                'pais_id' => 245
            ],
            [
                'nome' => "Grantown-on-Spey",
                'pais_id' => 245
            ],
            [
                'nome' => "Gravesend",
                'pais_id' => 245
            ],
            [
                'nome' => "Grays",
                'pais_id' => 245
            ],
            [
                'nome' => "Great Dunmow",
                'pais_id' => 245
            ],
            [
                'nome' => "Great Harwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Great Malvern",
                'pais_id' => 245
            ],
            [
                'nome' => "Great Torrington",
                'pais_id' => 245
            ],
            [
                'nome' => "Great Yarmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Greenock",
                'pais_id' => 245
            ],
            [
                'nome' => "Grimsby",
                'pais_id' => 245
            ],
            [
                'nome' => "Guildford",
                'pais_id' => 245
            ],
            [
                'nome' => "Guisborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Guiseley",
                'pais_id' => 245
            ],
            [
                'nome' => "Haddington",
                'pais_id' => 245
            ],
            [
                'nome' => "Hadleigh",
                'pais_id' => 245
            ],
            [
                'nome' => "Hailsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Hale",
                'pais_id' => 245
            ],
            [
                'nome' => "Halesowen",
                'pais_id' => 245
            ],
            [
                'nome' => "Halesworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Halifax",
                'pais_id' => 245
            ],
            [
                'nome' => "Halstead",
                'pais_id' => 245
            ],
            [
                'nome' => "Haltwhistle",
                'pais_id' => 245
            ],
            [
                'nome' => "Hamilton",
                'pais_id' => 245
            ],
            [
                'nome' => "Harlech",
                'pais_id' => 245
            ],
            [
                'nome' => "Harleston",
                'pais_id' => 245
            ],
            [
                'nome' => "Harlow",
                'pais_id' => 245
            ],
            [
                'nome' => "Harpenden",
                'pais_id' => 245
            ],
            [
                'nome' => "Harrogate",
                'pais_id' => 245
            ],
            [
                'nome' => "Hartlepool",
                'pais_id' => 245
            ],
            [
                'nome' => "Harwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Haslemere",
                'pais_id' => 245
            ],
            [
                'nome' => "Haslingden",
                'pais_id' => 245
            ],
            [
                'nome' => "Hastings",
                'pais_id' => 245
            ],
            [
                'nome' => "Hatfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Havant",
                'pais_id' => 245
            ],
            [
                'nome' => "Haverfordwest / Hwlffordd",
                'pais_id' => 245
            ],
            [
                'nome' => "Haverhill",
                'pais_id' => 245
            ],
            [
                'nome' => "Hawick",
                'pais_id' => 245
            ],
            [
                'nome' => "Haxby",
                'pais_id' => 245
            ],
            [
                'nome' => "Haydock",
                'pais_id' => 245
            ],
            [
                'nome' => "Hayle",
                'pais_id' => 245
            ],
            [
                'nome' => "Hay-on-Wye / Y Gelli Gandryll",
                'pais_id' => 245
            ],
            [
                'nome' => "Haywards Heath",
                'pais_id' => 245
            ],
            [
                'nome' => "Hazel Grove",
                'pais_id' => 245
            ],
            [
                'nome' => "Heanor",
                'pais_id' => 245
            ],
            [
                'nome' => "Heathfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Hebburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Hebden Bridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Heckington",
                'pais_id' => 245
            ],
            [
                'nome' => "Heckmondwike",
                'pais_id' => 245
            ],
            [
                'nome' => "Hedge End",
                'pais_id' => 245
            ],
            [
                'nome' => "Hedon",
                'pais_id' => 245
            ],
            [
                'nome' => "Helensburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Helmsley",
                'pais_id' => 245
            ],
            [
                'nome' => "Helston",
                'pais_id' => 245
            ],
            [
                'nome' => "Hemel Hempstead",
                'pais_id' => 245
            ],
            [
                'nome' => "Hemsworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Henley-in-Arden",
                'pais_id' => 245
            ],
            [
                'nome' => "Henley-on-Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "Hereford",
                'pais_id' => 245
            ],
            [
                'nome' => "Herne Bay",
                'pais_id' => 245
            ],
            [
                'nome' => "Hertford",
                'pais_id' => 245
            ],
            [
                'nome' => "Hessle",
                'pais_id' => 245
            ],
            [
                'nome' => "Heswall",
                'pais_id' => 245
            ],
            [
                'nome' => "Hetton-le-Hole",
                'pais_id' => 245
            ],
            [
                'nome' => "Hexham",
                'pais_id' => 245
            ],
            [
                'nome' => "Heysham",
                'pais_id' => 245
            ],
            [
                'nome' => "Heywood",
                'pais_id' => 245
            ],
            [
                'nome' => "Higham Ferrers",
                'pais_id' => 245
            ],
            [
                'nome' => "High Bentham",
                'pais_id' => 245
            ],
            [
                'nome' => "Higher Dunstone",
                'pais_id' => 245
            ],
            [
                'nome' => "Higher Larrick",
                'pais_id' => 245
            ],
            [
                'nome' => "Highworth",
                'pais_id' => 245
            ],
            [
                'nome' => "High Wycombe",
                'pais_id' => 245
            ],
            [
                'nome' => "Hinckley",
                'pais_id' => 245
            ],
            [
                'nome' => "Hindley",
                'pais_id' => 245
            ],
            [
                'nome' => "Hingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Hitchin",
                'pais_id' => 245
            ],
            [
                'nome' => "Hoddesdon",
                'pais_id' => 245
            ],
            [
                'nome' => "Holbeach",
                'pais_id' => 245
            ],
            [
                'nome' => "Holmfirth",
                'pais_id' => 245
            ],
            [
                'nome' => "Holsworthy",
                'pais_id' => 245
            ],
            [
                'nome' => "Holt",
                'pais_id' => 245
            ],
            [
                'nome' => "Holyhead / Caergybi",
                'pais_id' => 245
            ],
            [
                'nome' => "Holywell / Treffynnon",
                'pais_id' => 245
            ],
            [
                'nome' => "Holywood",
                'pais_id' => 245
            ],
            [
                'nome' => "Honiton",
                'pais_id' => 245
            ],
            [
                'nome' => "Horbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Horley",
                'pais_id' => 245
            ],
            [
                'nome' => "Horncastle",
                'pais_id' => 245
            ],
            [
                'nome' => "Horndean",
                'pais_id' => 245
            ],
            [
                'nome' => "Hornsea",
                'pais_id' => 245
            ],
            [
                'nome' => "Horsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Horwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Houghton-le-Spring",
                'pais_id' => 245
            ],
            [
                'nome' => "Houghton Regis",
                'pais_id' => 245
            ],
            [
                'nome' => "Howden",
                'pais_id' => 245
            ],
            [
                'nome' => "Hoylake",
                'pais_id' => 245
            ],
            [
                'nome' => "Hucknall",
                'pais_id' => 245
            ],
            [
                'nome' => "Huddersfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Hugh Town",
                'pais_id' => 245
            ],
            [
                'nome' => "Hungerford",
                'pais_id' => 245
            ],
            [
                'nome' => "Hunstanton",
                'pais_id' => 245
            ],
            [
                'nome' => "Huntingdon",
                'pais_id' => 245
            ],
            [
                'nome' => "Huntly",
                'pais_id' => 245
            ],
            [
                'nome' => "Hyde",
                'pais_id' => 245
            ],
            [
                'nome' => "Hythe",
                'pais_id' => 245
            ],
            [
                'nome' => "Ibstock",
                'pais_id' => 245
            ],
            [
                'nome' => "Ilfracombe",
                'pais_id' => 245
            ],
            [
                'nome' => "Ilkeston",
                'pais_id' => 245
            ],
            [
                'nome' => "Ilkley",
                'pais_id' => 245
            ],
            [
                'nome' => "Ilminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Immingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Ince-in-Makerfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Innerleithen",
                'pais_id' => 245
            ],
            [
                'nome' => "Inveraray",
                'pais_id' => 245
            ],
            [
                'nome' => "Inverbervie",
                'pais_id' => 245
            ],
            [
                'nome' => "Invergordon",
                'pais_id' => 245
            ],
            [
                'nome' => "Inverkeithing",
                'pais_id' => 245
            ],
            [
                'nome' => "Inverness / Inbhir Nis",
                'pais_id' => 245
            ],
            [
                'nome' => "Inverurie",
                'pais_id' => 245
            ],
            [
                'nome' => "Ipswich",
                'pais_id' => 245
            ],
            [
                'nome' => "Irlam",
                'pais_id' => 245
            ],
            [
                'nome' => "Irthlingborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Irvine",
                'pais_id' => 245
            ],
            [
                'nome' => "Ivybridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Jarrow",
                'pais_id' => 245
            ],
            [
                'nome' => "Jedburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Johnstone",
                'pais_id' => 245
            ],
            [
                'nome' => "Kearsley",
                'pais_id' => 245
            ],
            [
                'nome' => "Keighley",
                'pais_id' => 245
            ],
            [
                'nome' => "Keith",
                'pais_id' => 245
            ],
            [
                'nome' => "Kelso",
                'pais_id' => 245
            ],
            [
                'nome' => "Kempston",
                'pais_id' => 245
            ],
            [
                'nome' => "Kendal",
                'pais_id' => 245
            ],
            [
                'nome' => "Kenilworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Kesgrave",
                'pais_id' => 245
            ],
            [
                'nome' => "Keswick",
                'pais_id' => 245
            ],
            [
                'nome' => "Kettering",
                'pais_id' => 245
            ],
            [
                'nome' => "Keynsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Kidderminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Kidlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Kidsgrove",
                'pais_id' => 245
            ],
            [
                'nome' => "Kidwelly / Cydweli",
                'pais_id' => 245
            ],
            [
                'nome' => "Kilkeel",
                'pais_id' => 245
            ],
            [
                'nome' => "Kilmarnock",
                'pais_id' => 245
            ],
            [
                'nome' => "Kilsyth",
                'pais_id' => 245
            ],
            [
                'nome' => "Kilwinning",
                'pais_id' => 245
            ],
            [
                'nome' => "Kimberley",
                'pais_id' => 245
            ],
            [
                'nome' => "Kinghorn",
                'pais_id' => 245
            ],
            [
                'nome' => "Kingsbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "King's Lynn",
                'pais_id' => 245
            ],
            [
                'nome' => "Kingsteignton",
                'pais_id' => 245
            ],
            [
                'nome' => "Kingston upon Hull",
                'pais_id' => 245
            ],
            [
                'nome' => "Kingswinford",
                'pais_id' => 245
            ],
            [
                'nome' => "Kington",
                'pais_id' => 245
            ],
            [
                'nome' => "Kingussie",
                'pais_id' => 245
            ],
            [
                'nome' => "Kinross",
                'pais_id' => 245
            ],
            [
                'nome' => "Kintore",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkby",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkby-in-Ashfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkby Lonsdale",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkbymoorside",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkby Stephen",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkcaldy",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkcudbright",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkham",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkintilloch",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirkwall",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirriemuir",
                'pais_id' => 245
            ],
            [
                'nome' => "Kirton in Lindsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Knaresborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Knighton / Tref-y-Clawdd",
                'pais_id' => 245
            ],
            [
                'nome' => "Knottingley",
                'pais_id' => 245
            ],
            [
                'nome' => "Knutsford",
                'pais_id' => 245
            ],
            [
                'nome' => "Ladybank",
                'pais_id' => 245
            ],
            [
                'nome' => "Lampeter / Llanbedr Pont Steffan",
                'pais_id' => 245
            ],
            [
                'nome' => "Lanark",
                'pais_id' => 245
            ],
            [
                'nome' => "Lancaster",
                'pais_id' => 245
            ],
            [
                'nome' => "Langholm",
                'pais_id' => 245
            ],
            [
                'nome' => "Langport",
                'pais_id' => 245
            ],
            [
                'nome' => "Largs",
                'pais_id' => 245
            ],
            [
                'nome' => "Larkhall",
                'pais_id' => 245
            ],
            [
                'nome' => "Larne",
                'pais_id' => 245
            ],
            [
                'nome' => "Lauder",
                'pais_id' => 245
            ],
            [
                'nome' => "Laugharne / Talacharn",
                'pais_id' => 245
            ],
            [
                'nome' => "Launceston",
                'pais_id' => 245
            ],
            [
                'nome' => "Laurencekirk",
                'pais_id' => 245
            ],
            [
                'nome' => "Leatherhead",
                'pais_id' => 245
            ],
            [
                'nome' => "Lechlade-on-Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "Ledbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Leeds",
                'pais_id' => 245
            ],
            [
                'nome' => "Leek",
                'pais_id' => 245
            ],
            [
                'nome' => "Lees",
                'pais_id' => 245
            ],
            [
                'nome' => "Leicester",
                'pais_id' => 245
            ],
            [
                'nome' => "Leigh",
                'pais_id' => 245
            ],
            [
                'nome' => "Leigh-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Leighton Buzzard",
                'pais_id' => 245
            ],
            [
                'nome' => "Leiston",
                'pais_id' => 245
            ],
            [
                'nome' => "Leominster",
                'pais_id' => 245
            ],
            [
                'nome' => "Lerwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Leslie",
                'pais_id' => 245
            ],
            [
                'nome' => "Letchworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Leven",
                'pais_id' => 245
            ],
            [
                'nome' => "Lewes",
                'pais_id' => 245
            ],
            [
                'nome' => "Leyburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Leyland",
                'pais_id' => 245
            ],
            [
                'nome' => "Lichfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Limavady",
                'pais_id' => 245
            ],
            [
                'nome' => "Lincoln",
                'pais_id' => 245
            ],
            [
                'nome' => "Linlithgow",
                'pais_id' => 245
            ],
            [
                'nome' => "Lisburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Liskeard",
                'pais_id' => 245
            ],
            [
                'nome' => "Litherland",
                'pais_id' => 245
            ],
            [
                'nome' => "Littleborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Littlehampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Little Lever",
                'pais_id' => 245
            ],
            [
                'nome' => "Liverpool",
                'pais_id' => 245
            ],
            [
                'nome' => "Liversedge",
                'pais_id' => 245
            ],
            [
                'nome' => "Livingston",
                'pais_id' => 245
            ],
            [
                'nome' => "Llandeilo",
                'pais_id' => 245
            ],
            [
                'nome' => "Llandovery / Llanymddyfri",
                'pais_id' => 245
            ],
            [
                'nome' => "Llandrindod Wells / Llandrindod",
                'pais_id' => 245
            ],
            [
                'nome' => "Llandudno",
                'pais_id' => 245
            ],
            [
                'nome' => "Llandysul",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanelli",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanfair Caereinion",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanfairfechan",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanfyllin",
                'pais_id' => 245
            ],
            [
                'nome' => "Llangefni",
                'pais_id' => 245
            ],
            [
                'nome' => "Llangollen",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanidloes",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanrwst",
                'pais_id' => 245
            ],
            [
                'nome' => "Llantrisant",
                'pais_id' => 245
            ],
            [
                'nome' => "Llantwit Major / Llanilltud Fawr",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanwrtyd Wells",
                'pais_id' => 245
            ],
            [
                'nome' => "Llanybydder / Llanybyther",
                'pais_id' => 245
            ],
            [
                'nome' => "Loanhead",
                'pais_id' => 245
            ],
            [
                'nome' => "Lochgelly",
                'pais_id' => 245
            ],
            [
                'nome' => "Lochgilphead / Ceann Loch Gilb",
                'pais_id' => 245
            ],
            [
                'nome' => "Lochmaben",
                'pais_id' => 245
            ],
            [
                'nome' => "Lockerbie",
                'pais_id' => 245
            ],
            [
                'nome' => "Loddon",
                'pais_id' => 245
            ],
            [
                'nome' => "Loftus",
                'pais_id' => 245
            ],
            [
                'nome' => "London",
                'pais_id' => 245
            ],
            [
                'nome' => "Longbenton",
                'pais_id' => 245
            ],
            [
                'nome' => "Long Eaton",
                'pais_id' => 245
            ],
            [
                'nome' => "Longridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Long Sutton",
                'pais_id' => 245
            ],
            [
                'nome' => "Longtown",
                'pais_id' => 245
            ],
            [
                'nome' => "Looe",
                'pais_id' => 245
            ],
            [
                'nome' => "Lossiemouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Lostwithiel",
                'pais_id' => 245
            ],
            [
                'nome' => "Loughborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Loughor / Casllwchwr",
                'pais_id' => 245
            ],
            [
                'nome' => "Loughton",
                'pais_id' => 245
            ],
            [
                'nome' => "Louth",
                'pais_id' => 245
            ],
            [
                'nome' => "Lowestoft",
                'pais_id' => 245
            ],
            [
                'nome' => "Ludgershall",
                'pais_id' => 245
            ],
            [
                'nome' => "Ludlow",
                'pais_id' => 245
            ],
            [
                'nome' => "Lurgan",
                'pais_id' => 245
            ],
            [
                'nome' => "Luton",
                'pais_id' => 245
            ],
            [
                'nome' => "Lutterworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Lydd",
                'pais_id' => 245
            ],
            [
                'nome' => "Lydney",
                'pais_id' => 245
            ],
            [
                'nome' => "Lyme Regis",
                'pais_id' => 245
            ],
            [
                'nome' => "Lymington",
                'pais_id' => 245
            ],
            [
                'nome' => "Lymm",
                'pais_id' => 245
            ],
            [
                'nome' => "Lynton",
                'pais_id' => 245
            ],
            [
                'nome' => "Lytham St Anne's",
                'pais_id' => 245
            ],
            [
                'nome' => "Mablethorpe",
                'pais_id' => 245
            ],
            [
                'nome' => "Macclesfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Macduff",
                'pais_id' => 245
            ],
            [
                'nome' => "Machynlleth",
                'pais_id' => 245
            ],
            [
                'nome' => "Madeley",
                'pais_id' => 245
            ],
            [
                'nome' => "Maesteg",
                'pais_id' => 245
            ],
            [
                'nome' => "Magherafelt",
                'pais_id' => 245
            ],
            [
                'nome' => "Maghull",
                'pais_id' => 245
            ],
            [
                'nome' => "Maidenhead",
                'pais_id' => 245
            ],
            [
                'nome' => "Maidstone",
                'pais_id' => 245
            ],
            [
                'nome' => "Maldon",
                'pais_id' => 245
            ],
            [
                'nome' => "Malmesbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Maltby",
                'pais_id' => 245
            ],
            [
                'nome' => "Malton",
                'pais_id' => 245
            ],
            [
                'nome' => "Manchester",
                'pais_id' => 245
            ],
            [
                'nome' => "Manningtree",
                'pais_id' => 245
            ],
            [
                'nome' => "Mansfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Mansfield Woodhouse",
                'pais_id' => 245
            ],
            [
                'nome' => "March",
                'pais_id' => 245
            ],
            [
                'nome' => "Margate",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Bosworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Deeping",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Drayton",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Harborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Jew / Marazion",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Rasen",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Warsop",
                'pais_id' => 245
            ],
            [
                'nome' => "Market Weighton",
                'pais_id' => 245
            ],
            [
                'nome' => "Markinch",
                'pais_id' => 245
            ],
            [
                'nome' => "Marlborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Marlow",
                'pais_id' => 245
            ],
            [
                'nome' => "Marple",
                'pais_id' => 245
            ],
            [
                'nome' => "Marske-by-the-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Maryport",
                'pais_id' => 245
            ],
            [
                'nome' => "Masham",
                'pais_id' => 245
            ],
            [
                'nome' => "Matlock",
                'pais_id' => 245
            ],
            [
                'nome' => "Maybole",
                'pais_id' => 245
            ],
            [
                'nome' => "Meadow Well",
                'pais_id' => 245
            ],
            [
                'nome' => "Melksham",
                'pais_id' => 245
            ],
            [
                'nome' => "Melrose",
                'pais_id' => 245
            ],
            [
                'nome' => "Meltham",
                'pais_id' => 245
            ],
            [
                'nome' => "Melton Mowbray",
                'pais_id' => 245
            ],
            [
                'nome' => "Menai Bridge / Porthaethwy",
                'pais_id' => 245
            ],
            [
                'nome' => "Mere",
                'pais_id' => 245
            ],
            [
                'nome' => "Merthyr Tydfil / Merthyr Tudful",
                'pais_id' => 245
            ],
            [
                'nome' => "Methil",
                'pais_id' => 245
            ],
            [
                'nome' => "Mexborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Middleham",
                'pais_id' => 245
            ],
            [
                'nome' => "Middlesbrough",
                'pais_id' => 245
            ],
            [
                'nome' => "Middleton",
                'pais_id' => 245
            ],
            [
                'nome' => "Middlewich",
                'pais_id' => 245
            ],
            [
                'nome' => "Midhurst",
                'pais_id' => 245
            ],
            [
                'nome' => "Midsomer Norton",
                'pais_id' => 245
            ],
            [
                'nome' => "Mildenhall",
                'pais_id' => 245
            ],
            [
                'nome' => "Milford Haven / Aberdaugleddau",
                'pais_id' => 245
            ],
            [
                'nome' => "Millom",
                'pais_id' => 245
            ],
            [
                'nome' => "Millport",
                'pais_id' => 245
            ],
            [
                'nome' => "Milngavie",
                'pais_id' => 245
            ],
            [
                'nome' => "Milnrow",
                'pais_id' => 245
            ],
            [
                'nome' => "Milton Keynes",
                'pais_id' => 245
            ],
            [
                'nome' => "Minchinhampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Minehead",
                'pais_id' => 245
            ],
            [
                'nome' => "Minster",
                'pais_id' => 245
            ],
            [
                'nome' => "Mirfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Mitcheldean",
                'pais_id' => 245
            ],
            [
                'nome' => "Moffat",
                'pais_id' => 245
            ],
            [
                'nome' => "Mold / Yr Wyddgrug",
                'pais_id' => 245
            ],
            [
                'nome' => "Monifieth",
                'pais_id' => 245
            ],
            [
                'nome' => "Monmouth / Trefynwy",
                'pais_id' => 245
            ],
            [
                'nome' => "Montgomery / Trefaldwyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Montrose",
                'pais_id' => 245
            ],
            [
                'nome' => "Morecambe",
                'pais_id' => 245
            ],
            [
                'nome' => "Moretonhampstead",
                'pais_id' => 245
            ],
            [
                'nome' => "Moreton-in-Marsh",
                'pais_id' => 245
            ],
            [
                'nome' => "Morley",
                'pais_id' => 245
            ],
            [
                'nome' => "Morpeth",
                'pais_id' => 245
            ],
            [
                'nome' => "Mossley",
                'pais_id' => 245
            ],
            [
                'nome' => "Motherwell",
                'pais_id' => 245
            ],
            [
                'nome' => "Mountain Ash / Aberpennar",
                'pais_id' => 245
            ],
            [
                'nome' => "Much Wenlock",
                'pais_id' => 245
            ],
            [
                'nome' => "Musselburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Nailsea",
                'pais_id' => 245
            ],
            [
                'nome' => "Nailsworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Nairn",
                'pais_id' => 245
            ],
            [
                'nome' => "Nantwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Nantyglo",
                'pais_id' => 245
            ],
            [
                'nome' => "Narberth / Arberth",
                'pais_id' => 245
            ],
            [
                'nome' => "Neath / Castell-nedd",
                'pais_id' => 245
            ],
            [
                'nome' => "Needham Market",
                'pais_id' => 245
            ],
            [
                'nome' => "Nefyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Nelson",
                'pais_id' => 245
            ],
            [
                'nome' => "Neston",
                'pais_id' => 245
            ],
            [
                'nome' => "New Alresford",
                'pais_id' => 245
            ],
            [
                'nome' => "Newark-on-Trent",
                'pais_id' => 245
            ],
            [
                'nome' => "Newbiggin-by-the-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Newbridge / Trecceln",
                'pais_id' => 245
            ],
            [
                'nome' => "Newburgh",
                'pais_id' => 245
            ],
            [
                'nome' => "Newbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Newcastle",
                'pais_id' => 245
            ],
            [
                'nome' => "Newcastle Emlyn / Castell Newydd Emlyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Newcastle-under-Lyme",
                'pais_id' => 245
            ],
            [
                'nome' => "Newcastle upon Tyne",
                'pais_id' => 245
            ],
            [
                'nome' => "Newent",
                'pais_id' => 245
            ],
            [
                'nome' => "New Galloway",
                'pais_id' => 245
            ],
            [
                'nome' => "Newhaven",
                'pais_id' => 245
            ],
            [
                'nome' => "Newlyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Newmarket",
                'pais_id' => 245
            ],
            [
                'nome' => "New Mills",
                'pais_id' => 245
            ],
            [
                'nome' => "Newmilns",
                'pais_id' => 245
            ],
            [
                'nome' => "New Milton",
                'pais_id' => 245
            ],
            [
                'nome' => "Newport",
                'pais_id' => 245
            ],
            [
                'nome' => "Newport",
                'pais_id' => 245
            ],
            [
                'nome' => "Newport / Casnewydd",
                'pais_id' => 245
            ],
            [
                'nome' => "Newport-on-Tay",
                'pais_id' => 245
            ],
            [
                'nome' => "Newport Pagnell",
                'pais_id' => 245
            ],
            [
                'nome' => "Newport / Trefdraeth",
                'pais_id' => 245
            ],
            [
                'nome' => "Newquay",
                'pais_id' => 245
            ],
            [
                'nome' => "New Quay / Ceinewydd",
                'pais_id' => 245
            ],
            [
                'nome' => "New Romney",
                'pais_id' => 245
            ],
            [
                'nome' => "Newry",
                'pais_id' => 245
            ],
            [
                'nome' => "Newton Abbot",
                'pais_id' => 245
            ],
            [
                'nome' => "Newton Aycliffe",
                'pais_id' => 245
            ],
            [
                'nome' => "Newton-le-Willows",
                'pais_id' => 245
            ],
            [
                'nome' => "Newton Stewart",
                'pais_id' => 245
            ],
            [
                'nome' => "Newtownabbey",
                'pais_id' => 245
            ],
            [
                'nome' => "Newtownards",
                'pais_id' => 245
            ],
            [
                'nome' => "Newtown / Y Drenewydd",
                'pais_id' => 245
            ],
            [
                'nome' => "Neyland",
                'pais_id' => 245
            ],
            [
                'nome' => "Normanton",
                'pais_id' => 245
            ],
            [
                'nome' => "Northallerton",
                'pais_id' => 245
            ],
            [
                'nome' => "Northam",
                'pais_id' => 245
            ],
            [
                'nome' => "Northampton",
                'pais_id' => 245
            ],
            [
                'nome' => "North Berwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Northfleet",
                'pais_id' => 245
            ],
            [
                'nome' => "North Hykeham",
                'pais_id' => 245
            ],
            [
                'nome' => "Northleach",
                'pais_id' => 245
            ],
            [
                'nome' => "North Petherton",
                'pais_id' => 245
            ],
            [
                'nome' => "North Tawton",
                'pais_id' => 245
            ],
            [
                'nome' => "North Walsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Northwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Norton-on-Derwent",
                'pais_id' => 245
            ],
            [
                'nome' => "Norwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Nottingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Nuneaton",
                'pais_id' => 245
            ],
            [
                'nome' => "Oakham",
                'pais_id' => 245
            ],
            [
                'nome' => "Oban",
                'pais_id' => 245
            ],
            [
                'nome' => "Okehampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Oldbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Oldham",
                'pais_id' => 245
            ],
            [
                'nome' => "Oldmeldrum",
                'pais_id' => 245
            ],
            [
                'nome' => "Olney",
                'pais_id' => 245
            ],
            [
                'nome' => "Omagh",
                'pais_id' => 245
            ],
            [
                'nome' => "Ormskirk",
                'pais_id' => 245
            ],
            [
                'nome' => "Ossett",
                'pais_id' => 245
            ],
            [
                'nome' => "Oswaldtwistle",
                'pais_id' => 245
            ],
            [
                'nome' => "Oswestry / Croesoswallt",
                'pais_id' => 245
            ],
            [
                'nome' => "Otley",
                'pais_id' => 245
            ],
            [
                'nome' => "Ottery St Mary",
                'pais_id' => 245
            ],
            [
                'nome' => "Oundle",
                'pais_id' => 245
            ],
            [
                'nome' => "Oxford",
                'pais_id' => 245
            ],
            [
                'nome' => "Oxted",
                'pais_id' => 245
            ],
            [
                'nome' => "Paddock Wood",
                'pais_id' => 245
            ],
            [
                'nome' => "Padiham",
                'pais_id' => 245
            ],
            [
                'nome' => "Padstow",
                'pais_id' => 245
            ],
            [
                'nome' => "Paignton",
                'pais_id' => 245
            ],
            [
                'nome' => "Painswick",
                'pais_id' => 245
            ],
            [
                'nome' => "Paisley",
                'pais_id' => 245
            ],
            [
                'nome' => "Partington",
                'pais_id' => 245
            ],
            [
                'nome' => "Pateley Bridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Peacehaven",
                'pais_id' => 245
            ],
            [
                'nome' => "Peebles",
                'pais_id' => 245
            ],
            [
                'nome' => "Peel",
                'pais_id' => 245
            ],
            [
                'nome' => "Pembroke Dock / Doc Penfro",
                'pais_id' => 245
            ],
            [
                'nome' => "Pembroke / Penfro",
                'pais_id' => 245
            ],
            [
                'nome' => "Penarth",
                'pais_id' => 245
            ],
            [
                'nome' => "Pencoed",
                'pais_id' => 245
            ],
            [
                'nome' => "Penicuik",
                'pais_id' => 245
            ],
            [
                'nome' => "Penistone",
                'pais_id' => 245
            ],
            [
                'nome' => "Penkridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Penmaenmawr",
                'pais_id' => 245
            ],
            [
                'nome' => "Penrith",
                'pais_id' => 245
            ],
            [
                'nome' => "Penryn",
                'pais_id' => 245
            ],
            [
                'nome' => "Penzance",
                'pais_id' => 245
            ],
            [
                'nome' => "Pershore",
                'pais_id' => 245
            ],
            [
                'nome' => "Perth",
                'pais_id' => 245
            ],
            [
                'nome' => "Peterborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Peterhead",
                'pais_id' => 245
            ],
            [
                'nome' => "Peterlee",
                'pais_id' => 245
            ],
            [
                'nome' => "Petersfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Petworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Pickering",
                'pais_id' => 245
            ],
            [
                'nome' => "Pitlochry",
                'pais_id' => 245
            ],
            [
                'nome' => "Pittenweem",
                'pais_id' => 245
            ],
            [
                'nome' => "Plymouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Pocklington",
                'pais_id' => 245
            ],
            [
                'nome' => "Polegate",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontardawe",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontarddulais",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontefract",
                'pais_id' => 245
            ],
            [
                'nome' => "Ponteland",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontllanfraith",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontycymer",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontypool / Pont-y-pŵl",
                'pais_id' => 245
            ],
            [
                'nome' => "Pontypridd",
                'pais_id' => 245
            ],
            [
                'nome' => "Poole",
                'pais_id' => 245
            ],
            [
                'nome' => "Portadown",
                'pais_id' => 245
            ],
            [
                'nome' => "Port Glasgow",
                'pais_id' => 245
            ],
            [
                'nome' => "Porth",
                'pais_id' => 245
            ],
            [
                'nome' => "Porthcawl",
                'pais_id' => 245
            ],
            [
                'nome' => "Porthmadog",
                'pais_id' => 245
            ],
            [
                'nome' => "Portishead",
                'pais_id' => 245
            ],
            [
                'nome' => "Portlethen",
                'pais_id' => 245
            ],
            [
                'nome' => "Portrush",
                'pais_id' => 245
            ],
            [
                'nome' => "Portsmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Portsoy",
                'pais_id' => 245
            ],
            [
                'nome' => "Portstewart",
                'pais_id' => 245
            ],
            [
                'nome' => "Port Talbot",
                'pais_id' => 245
            ],
            [
                'nome' => "Potters Bar",
                'pais_id' => 245
            ],
            [
                'nome' => "Potton",
                'pais_id' => 245
            ],
            [
                'nome' => "Poulton-le-Fylde",
                'pais_id' => 245
            ],
            [
                'nome' => "Poynton",
                'pais_id' => 245
            ],
            [
                'nome' => "Prescot",
                'pais_id' => 245
            ],
            [
                'nome' => "Prestatyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Presteigne / Llanandras",
                'pais_id' => 245
            ],
            [
                'nome' => "Preston",
                'pais_id' => 245
            ],
            [
                'nome' => "Prestonpans",
                'pais_id' => 245
            ],
            [
                'nome' => "Prestwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Princes Risborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Prudhoe",
                'pais_id' => 245
            ],
            [
                'nome' => "Pudsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Pwllheli",
                'pais_id' => 245
            ],
            [
                'nome' => "Queenborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Queensferry",
                'pais_id' => 245
            ],
            [
                'nome' => "Radcliffe",
                'pais_id' => 245
            ],
            [
                'nome' => "Radlett",
                'pais_id' => 245
            ],
            [
                'nome' => "Radstock",
                'pais_id' => 245
            ],
            [
                'nome' => "Rainford",
                'pais_id' => 245
            ],
            [
                'nome' => "Ramsbottom",
                'pais_id' => 245
            ],
            [
                'nome' => "Ramsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Ramsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Ramsgate",
                'pais_id' => 245
            ],
            [
                'nome' => "Randalstown",
                'pais_id' => 245
            ],
            [
                'nome' => "Raunds",
                'pais_id' => 245
            ],
            [
                'nome' => "Rawmarsh",
                'pais_id' => 245
            ],
            [
                'nome' => "Rawtenstall",
                'pais_id' => 245
            ],
            [
                'nome' => "Rayleigh",
                'pais_id' => 245
            ],
            [
                'nome' => "Reading",
                'pais_id' => 245
            ],
            [
                'nome' => "Redcar",
                'pais_id' => 245
            ],
            [
                'nome' => "Redditch",
                'pais_id' => 245
            ],
            [
                'nome' => "Redhill",
                'pais_id' => 245
            ],
            [
                'nome' => "Redruth",
                'pais_id' => 245
            ],
            [
                'nome' => "Reepham",
                'pais_id' => 245
            ],
            [
                'nome' => "Reigate",
                'pais_id' => 245
            ],
            [
                'nome' => "Renfrew",
                'pais_id' => 245
            ],
            [
                'nome' => "Retford",
                'pais_id' => 245
            ],
            [
                'nome' => "Rhayader / Rhaeadr Gwy",
                'pais_id' => 245
            ],
            [
                'nome' => "Rhondda",
                'pais_id' => 245
            ],
            [
                'nome' => "Rhosgadfan",
                'pais_id' => 245
            ],
            [
                'nome' => "Rhuddlan",
                'pais_id' => 245
            ],
            [
                'nome' => "Rhyl",
                'pais_id' => 245
            ],
            [
                'nome' => "Rhymney / Rhymni",
                'pais_id' => 245
            ],
            [
                'nome' => "Richmond",
                'pais_id' => 245
            ],
            [
                'nome' => "Richmond",
                'pais_id' => 245
            ],
            [
                'nome' => "Rickmansworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Ringwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Ripley",
                'pais_id' => 245
            ],
            [
                'nome' => "Ripon",
                'pais_id' => 245
            ],
            [
                'nome' => "Risca / Rhisga",
                'pais_id' => 245
            ],
            [
                'nome' => "Rishton",
                'pais_id' => 245
            ],
            [
                'nome' => "Rochdale",
                'pais_id' => 245
            ],
            [
                'nome' => "Rochester",
                'pais_id' => 245
            ],
            [
                'nome' => "Rochford",
                'pais_id' => 245
            ],
            [
                'nome' => "Romiley",
                'pais_id' => 245
            ],
            [
                'nome' => "Romsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Rosehearty",
                'pais_id' => 245
            ],
            [
                'nome' => "Ross-on-Wye",
                'pais_id' => 245
            ],
            [
                'nome' => "Rothbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Rotherham",
                'pais_id' => 245
            ],
            [
                'nome' => "Rothes",
                'pais_id' => 245
            ],
            [
                'nome' => "Rothesay",
                'pais_id' => 245
            ],
            [
                'nome' => "Rothwell",
                'pais_id' => 245
            ],
            [
                'nome' => "Rowley Regis",
                'pais_id' => 245
            ],
            [
                'nome' => "Royal Leamington Spa",
                'pais_id' => 245
            ],
            [
                'nome' => "Royal Sutton Coldfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Royal Tunbridge Wells",
                'pais_id' => 245
            ],
            [
                'nome' => "Royal Wootton Bassett",
                'pais_id' => 245
            ],
            [
                'nome' => "Royston",
                'pais_id' => 245
            ],
            [
                'nome' => "Royston",
                'pais_id' => 245
            ],
            [
                'nome' => "Royton",
                'pais_id' => 245
            ],
            [
                'nome' => "Rugby",
                'pais_id' => 245
            ],
            [
                'nome' => "Rugeley",
                'pais_id' => 245
            ],
            [
                'nome' => "Runcorn",
                'pais_id' => 245
            ],
            [
                'nome' => "Rushden",
                'pais_id' => 245
            ],
            [
                'nome' => "Rutherglen",
                'pais_id' => 245
            ],
            [
                'nome' => "Ruthin / Rhuthun",
                'pais_id' => 245
            ],
            [
                'nome' => "Ryde",
                'pais_id' => 245
            ],
            [
                'nome' => "Rye",
                'pais_id' => 245
            ],
            [
                'nome' => "Ryton",
                'pais_id' => 245
            ],
            [
                'nome' => "Saffron Walden",
                'pais_id' => 245
            ],
            [
                'nome' => "Salcombe",
                'pais_id' => 245
            ],
            [
                'nome' => "Sale",
                'pais_id' => 245
            ],
            [
                'nome' => "Salford",
                'pais_id' => 245
            ],
            [
                'nome' => "Salisbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Saltash",
                'pais_id' => 245
            ],
            [
                'nome' => "Saltburn-by-the-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Saltcoats",
                'pais_id' => 245
            ],
            [
                'nome' => "Sandbach",
                'pais_id' => 245
            ],
            [
                'nome' => "Sandhurst",
                'pais_id' => 245
            ],
            [
                'nome' => "Sandiacre",
                'pais_id' => 245
            ],
            [
                'nome' => "Sandown",
                'pais_id' => 245
            ],
            [
                'nome' => "Sandwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Sandy",
                'pais_id' => 245
            ],
            [
                'nome' => "Sanquhar",
                'pais_id' => 245
            ],
            [
                'nome' => "Sawbridgeworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Saxmundham",
                'pais_id' => 245
            ],
            [
                'nome' => "Scarborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Scunthorpe",
                'pais_id' => 245
            ],
            [
                'nome' => "Seaford",
                'pais_id' => 245
            ],
            [
                'nome' => "Seaham",
                'pais_id' => 245
            ],
            [
                'nome' => "Seaton",
                'pais_id' => 245
            ],
            [
                'nome' => "Sedbergh",
                'pais_id' => 245
            ],
            [
                'nome' => "Sedgefield",
                'pais_id' => 245
            ],
            [
                'nome' => "Sedgley",
                'pais_id' => 245
            ],
            [
                'nome' => "Selby",
                'pais_id' => 245
            ],
            [
                'nome' => "Selkirk",
                'pais_id' => 245
            ],
            [
                'nome' => "Selsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Settle",
                'pais_id' => 245
            ],
            [
                'nome' => "Sevenoaks",
                'pais_id' => 245
            ],
            [
                'nome' => "Shaftesbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Shanklin",
                'pais_id' => 245
            ],
            [
                'nome' => "Shaw",
                'pais_id' => 245
            ],
            [
                'nome' => "Sheerness",
                'pais_id' => 245
            ],
            [
                'nome' => "Sheffield",
                'pais_id' => 245
            ],
            [
                'nome' => "Shefford",
                'pais_id' => 245
            ],
            [
                'nome' => "Shepshed",
                'pais_id' => 245
            ],
            [
                'nome' => "Shepton Mallet",
                'pais_id' => 245
            ],
            [
                'nome' => "Sherborne",
                'pais_id' => 245
            ],
            [
                'nome' => "Sherford",
                'pais_id' => 245
            ],
            [
                'nome' => "Sheringham",
                'pais_id' => 245
            ],
            [
                'nome' => "Shildon",
                'pais_id' => 245
            ],
            [
                'nome' => "Shipley",
                'pais_id' => 245
            ],
            [
                'nome' => "Shipston-on-Stour",
                'pais_id' => 245
            ],
            [
                'nome' => "Shirebrook",
                'pais_id' => 245
            ],
            [
                'nome' => "Shoreham-by-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Shotton",
                'pais_id' => 245
            ],
            [
                'nome' => "Shrewsbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Sidmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Silloth",
                'pais_id' => 245
            ],
            [
                'nome' => "Silsden",
                'pais_id' => 245
            ],
            [
                'nome' => "Sittingbourne",
                'pais_id' => 245
            ],
            [
                'nome' => "Skegness",
                'pais_id' => 245
            ],
            [
                'nome' => "Skelmersdale",
                'pais_id' => 245
            ],
            [
                'nome' => "Skelton",
                'pais_id' => 245
            ],
            [
                'nome' => "Skipton",
                'pais_id' => 245
            ],
            [
                'nome' => "Sleaford",
                'pais_id' => 245
            ],
            [
                'nome' => "Slough",
                'pais_id' => 245
            ],
            [
                'nome' => "Smethwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Snodland",
                'pais_id' => 245
            ],
            [
                'nome' => "Soham",
                'pais_id' => 245
            ],
            [
                'nome' => "Solihull",
                'pais_id' => 245
            ],
            [
                'nome' => "Somerton",
                'pais_id' => 245
            ],
            [
                'nome' => "Southam",
                'pais_id' => 245
            ],
            [
                'nome' => "Southampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Southborough",
                'pais_id' => 245
            ],
            [
                'nome' => "South Cave",
                'pais_id' => 245
            ],
            [
                'nome' => "South Elmsall",
                'pais_id' => 245
            ],
            [
                'nome' => "Southend-on-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "South Kirkby",
                'pais_id' => 245
            ],
            [
                'nome' => "Southminster",
                'pais_id' => 245
            ],
            [
                'nome' => "South Molton",
                'pais_id' => 245
            ],
            [
                'nome' => "South Petherton",
                'pais_id' => 245
            ],
            [
                'nome' => "Southport",
                'pais_id' => 245
            ],
            [
                'nome' => "South Shields",
                'pais_id' => 245
            ],
            [
                'nome' => "Southwell",
                'pais_id' => 245
            ],
            [
                'nome' => "Southwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Southwold",
                'pais_id' => 245
            ],
            [
                'nome' => "South Woodham Ferrers",
                'pais_id' => 245
            ],
            [
                'nome' => "Sowerby Bridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Spalding",
                'pais_id' => 245
            ],
            [
                'nome' => "Spennymoor",
                'pais_id' => 245
            ],
            [
                'nome' => "Spilsby",
                'pais_id' => 245
            ],
            [
                'nome' => "Stafford",
                'pais_id' => 245
            ],
            [
                'nome' => "Staines-upon-Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "St Albans",
                'pais_id' => 245
            ],
            [
                'nome' => "Stalbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Stalham",
                'pais_id' => 245
            ],
            [
                'nome' => "Stalybridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Stamford",
                'pais_id' => 245
            ],
            [
                'nome' => "Standish",
                'pais_id' => 245
            ],
            [
                'nome' => "St Andrews",
                'pais_id' => 245
            ],
            [
                'nome' => "Stanford-le-Hope",
                'pais_id' => 245
            ],
            [
                'nome' => "Stanhope",
                'pais_id' => 245
            ],
            [
                'nome' => "Stanley",
                'pais_id' => 245
            ],
            [
                'nome' => "Stansted Mountfitchet",
                'pais_id' => 245
            ],
            [
                'nome' => "Stapleford",
                'pais_id' => 245
            ],
            [
                'nome' => "St Asaph / Llanelwy",
                'pais_id' => 245
            ],
            [
                'nome' => "St Austell",
                'pais_id' => 245
            ],
            [
                'nome' => "Staveley",
                'pais_id' => 245
            ],
            [
                'nome' => "St Blazey",
                'pais_id' => 245
            ],
            [
                'nome' => "St Clears / Sanclêr",
                'pais_id' => 245
            ],
            [
                'nome' => "St Columb Major",
                'pais_id' => 245
            ],
            [
                'nome' => "St Davids / Tyddewi",
                'pais_id' => 245
            ],
            [
                'nome' => "Stevenage",
                'pais_id' => 245
            ],
            [
                'nome' => "Stevenston",
                'pais_id' => 245
            ],
            [
                'nome' => "Stewarton",
                'pais_id' => 245
            ],
            [
                'nome' => "Steyning",
                'pais_id' => 245
            ],
            [
                'nome' => "St Helens",
                'pais_id' => 245
            ],
            [
                'nome' => "Stirling",
                'pais_id' => 245
            ],
            [
                'nome' => "St Ives",
                'pais_id' => 245
            ],
            [
                'nome' => "St Ives",
                'pais_id' => 245
            ],
            [
                'nome' => "St Just / St Just in Penwith",
                'pais_id' => 245
            ],
            [
                'nome' => "St Neots",
                'pais_id' => 245
            ],
            [
                'nome' => "Stockport",
                'pais_id' => 245
            ],
            [
                'nome' => "Stocksbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Stockton-on-Tees",
                'pais_id' => 245
            ],
            [
                'nome' => "Stoke-on-Trent",
                'pais_id' => 245
            ],
            [
                'nome' => "Stone",
                'pais_id' => 245
            ],
            [
                'nome' => "Stonehaven",
                'pais_id' => 245
            ],
            [
                'nome' => "Stonehouse",
                'pais_id' => 245
            ],
            [
                'nome' => "Stornoway / Steòrnabhagh",
                'pais_id' => 245
            ],
            [
                'nome' => "Stotfold",
                'pais_id' => 245
            ],
            [
                'nome' => "Stourbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Stourport-on-Severn",
                'pais_id' => 245
            ],
            [
                'nome' => "Stowmarket",
                'pais_id' => 245
            ],
            [
                'nome' => "Stow-on-the-Wold",
                'pais_id' => 245
            ],
            [
                'nome' => "Strabane",
                'pais_id' => 245
            ],
            [
                'nome' => "Stranraer",
                'pais_id' => 245
            ],
            [
                'nome' => "Stratford-upon-Avon",
                'pais_id' => 245
            ],
            [
                'nome' => "Stratton",
                'pais_id' => 245
            ],
            [
                'nome' => "Street",
                'pais_id' => 245
            ],
            [
                'nome' => "Stretford",
                'pais_id' => 245
            ],
            [
                'nome' => "Stromness",
                'pais_id' => 245
            ],
            [
                'nome' => "Stroud",
                'pais_id' => 245
            ],
            [
                'nome' => "Sturminster Newton",
                'pais_id' => 245
            ],
            [
                'nome' => "Sudbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Sunbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Sunbury-on-Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "Sunderland",
                'pais_id' => 245
            ],
            [
                'nome' => "Sutton Coldfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Sutton in Ashfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Swadlincote",
                'pais_id' => 245
            ],
            [
                'nome' => "Swaffham",
                'pais_id' => 245
            ],
            [
                'nome' => "Swanage",
                'pais_id' => 245
            ],
            [
                'nome' => "Swanley",
                'pais_id' => 245
            ],
            [
                'nome' => "Swanscombe",
                'pais_id' => 245
            ],
            [
                'nome' => "Swansea / Abertawe",
                'pais_id' => 245
            ],
            [
                'nome' => "Swindon",
                'pais_id' => 245
            ],
            [
                'nome' => "Swinton",
                'pais_id' => 245
            ],
            [
                'nome' => "Syston",
                'pais_id' => 245
            ],
            [
                'nome' => "Tadcaster",
                'pais_id' => 245
            ],
            [
                'nome' => "Tadley",
                'pais_id' => 245
            ],
            [
                'nome' => "Tain",
                'pais_id' => 245
            ],
            [
                'nome' => "Talbot Green",
                'pais_id' => 245
            ],
            [
                'nome' => "Talgarth",
                'pais_id' => 245
            ],
            [
                'nome' => "Tamworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Taunton",
                'pais_id' => 245
            ],
            [
                'nome' => "Tavistock",
                'pais_id' => 245
            ],
            [
                'nome' => "Tayport",
                'pais_id' => 245
            ],
            [
                'nome' => "Teignmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Telford",
                'pais_id' => 245
            ],
            [
                'nome' => "Tenbury Wells",
                'pais_id' => 245
            ],
            [
                'nome' => "Tenby / Dinbych-y-Pysgod",
                'pais_id' => 245
            ],
            [
                'nome' => "Tenterden",
                'pais_id' => 245
            ],
            [
                'nome' => "Tetbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Tewkesbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Thame",
                'pais_id' => 245
            ],
            [
                'nome' => "Thatcham",
                'pais_id' => 245
            ],
            [
                'nome' => "Thaxted",
                'pais_id' => 245
            ],
            [
                'nome' => "Thetford",
                'pais_id' => 245
            ],
            [
                'nome' => "Thirsk",
                'pais_id' => 245
            ],
            [
                'nome' => "Thornaby-on-Tees",
                'pais_id' => 245
            ],
            [
                'nome' => "Thornbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Thorne",
                'pais_id' => 245
            ],
            [
                'nome' => "Thornton",
                'pais_id' => 245
            ],
            [
                'nome' => "Thrapston",
                'pais_id' => 245
            ],
            [
                'nome' => "Thurnscoe",
                'pais_id' => 245
            ],
            [
                'nome' => "Thurso",
                'pais_id' => 245
            ],
            [
                'nome' => "Tickhill",
                'pais_id' => 245
            ],
            [
                'nome' => "Tidworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Tilbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Tillicoultry",
                'pais_id' => 245
            ],
            [
                'nome' => "Tipton",
                'pais_id' => 245
            ],
            [
                'nome' => "Tiverton",
                'pais_id' => 245
            ],
            [
                'nome' => "Tobermory",
                'pais_id' => 245
            ],
            [
                'nome' => "Todmorden",
                'pais_id' => 245
            ],
            [
                'nome' => "Tonbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Tonypandy",
                'pais_id' => 245
            ],
            [
                'nome' => "Topsham",
                'pais_id' => 245
            ],
            [
                'nome' => "Torpoint",
                'pais_id' => 245
            ],
            [
                'nome' => "Torquay",
                'pais_id' => 245
            ],
            [
                'nome' => "Totnes",
                'pais_id' => 245
            ],
            [
                'nome' => "Totton",
                'pais_id' => 245
            ],
            [
                'nome' => "Towcester",
                'pais_id' => 245
            ],
            [
                'nome' => "Tow Law",
                'pais_id' => 245
            ],
            [
                'nome' => "Tranent",
                'pais_id' => 245
            ],
            [
                'nome' => "Trawden",
                'pais_id' => 245
            ],
            [
                'nome' => "Tredegar",
                'pais_id' => 245
            ],
            [
                'nome' => "Tregaron",
                'pais_id' => 245
            ],
            [
                'nome' => "Treharris",
                'pais_id' => 245
            ],
            [
                'nome' => "Treherbert",
                'pais_id' => 245
            ],
            [
                'nome' => "Treorchy / Treorci",
                'pais_id' => 245
            ],
            [
                'nome' => "Tring",
                'pais_id' => 245
            ],
            [
                'nome' => "Troon",
                'pais_id' => 245
            ],
            [
                'nome' => "Trowbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Truro",
                'pais_id' => 245
            ],
            [
                'nome' => "Turriff",
                'pais_id' => 245
            ],
            [
                'nome' => "Tyldesley",
                'pais_id' => 245
            ],
            [
                'nome' => "Tynemouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Tywyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Uckfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Uddingston",
                'pais_id' => 245
            ],
            [
                'nome' => "Ulverston",
                'pais_id' => 245
            ],
            [
                'nome' => "Uppingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Urmston",
                'pais_id' => 245
            ],
            [
                'nome' => "Usk / Brynbuga",
                'pais_id' => 245
            ],
            [
                'nome' => "Uttoxeter",
                'pais_id' => 245
            ],
            [
                'nome' => "Ventnor",
                'pais_id' => 245
            ],
            [
                'nome' => "Verwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Wadebridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Wadhurst",
                'pais_id' => 245
            ],
            [
                'nome' => "Wainfleet All Saints",
                'pais_id' => 245
            ],
            [
                'nome' => "Wakefield",
                'pais_id' => 245
            ],
            [
                'nome' => "Walkden",
                'pais_id' => 245
            ],
            [
                'nome' => "Wallasey",
                'pais_id' => 245
            ],
            [
                'nome' => "Wallingford",
                'pais_id' => 245
            ],
            [
                'nome' => "Wallsend",
                'pais_id' => 245
            ],
            [
                'nome' => "Walsall",
                'pais_id' => 245
            ],
            [
                'nome' => "Waltham Abbey",
                'pais_id' => 245
            ],
            [
                'nome' => "Waltham Cross",
                'pais_id' => 245
            ],
            [
                'nome' => "Walton-on-Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "Walton-on-the-Naze",
                'pais_id' => 245
            ],
            [
                'nome' => "Wantage",
                'pais_id' => 245
            ],
            [
                'nome' => "Ware",
                'pais_id' => 245
            ],
            [
                'nome' => "Wareham",
                'pais_id' => 245
            ],
            [
                'nome' => "Warlingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Warminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Warrenpoint",
                'pais_id' => 245
            ],
            [
                'nome' => "Warrington",
                'pais_id' => 245
            ],
            [
                'nome' => "Warwick",
                'pais_id' => 245
            ],
            [
                'nome' => "Washington",
                'pais_id' => 245
            ],
            [
                'nome' => "Watchet",
                'pais_id' => 245
            ],
            [
                'nome' => "Watford",
                'pais_id' => 245
            ],
            [
                'nome' => "Wath upon Dearne",
                'pais_id' => 245
            ],
            [
                'nome' => "Watlington",
                'pais_id' => 245
            ],
            [
                'nome' => "Watton",
                'pais_id' => 245
            ],
            [
                'nome' => "Wednesbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Wellingborough",
                'pais_id' => 245
            ],
            [
                'nome' => "Wellington",
                'pais_id' => 245
            ],
            [
                'nome' => "Wells",
                'pais_id' => 245
            ],
            [
                'nome' => "Wells-next-the-Sea",
                'pais_id' => 245
            ],
            [
                'nome' => "Welshpool / Y Trallwng",
                'pais_id' => 245
            ],
            [
                'nome' => "Welwyn Garden City",
                'pais_id' => 245
            ],
            [
                'nome' => "Wem",
                'pais_id' => 245
            ],
            [
                'nome' => "Wendover",
                'pais_id' => 245
            ],
            [
                'nome' => "West Bridgford",
                'pais_id' => 245
            ],
            [
                'nome' => "West Bromwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Westbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Westerham",
                'pais_id' => 245
            ],
            [
                'nome' => "Westhill",
                'pais_id' => 245
            ],
            [
                'nome' => "Westhoughton",
                'pais_id' => 245
            ],
            [
                'nome' => "West Kirby",
                'pais_id' => 245
            ],
            [
                'nome' => "West Malling",
                'pais_id' => 245
            ],
            [
                'nome' => "West Mersea",
                'pais_id' => 245
            ],
            [
                'nome' => "Westminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Weston-Super-Mare",
                'pais_id' => 245
            ],
            [
                'nome' => "Wetherby",
                'pais_id' => 245
            ],
            [
                'nome' => "Weybridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Weymouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Whaley Bridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Whickham",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitby",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitchurch",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitchurch",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitefield",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitehaven",
                'pais_id' => 245
            ],
            [
                'nome' => "Whithorn",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitland / Hendy-Gwyn",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitley Bay",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitnash",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitstable",
                'pais_id' => 245
            ],
            [
                'nome' => "Whittlesey",
                'pais_id' => 245
            ],
            [
                'nome' => "Whitworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Wick",
                'pais_id' => 245
            ],
            [
                'nome' => "Wickford",
                'pais_id' => 245
            ],
            [
                'nome' => "Wickham",
                'pais_id' => 245
            ],
            [
                'nome' => "Wickham Market",
                'pais_id' => 245
            ],
            [
                'nome' => "Widnes",
                'pais_id' => 245
            ],
            [
                'nome' => "Wigan",
                'pais_id' => 245
            ],
            [
                'nome' => "Wigton",
                'pais_id' => 245
            ],
            [
                'nome' => "Wigtown",
                'pais_id' => 245
            ],
            [
                'nome' => "Willenhall",
                'pais_id' => 245
            ],
            [
                'nome' => "Willington",
                'pais_id' => 245
            ],
            [
                'nome' => "Wilmslow",
                'pais_id' => 245
            ],
            [
                'nome' => "Wilton",
                'pais_id' => 245
            ],
            [
                'nome' => "Wimborne Minster",
                'pais_id' => 245
            ],
            [
                'nome' => "Wincanton",
                'pais_id' => 245
            ],
            [
                'nome' => "Winchcombe",
                'pais_id' => 245
            ],
            [
                'nome' => "Winchester",
                'pais_id' => 245
            ],
            [
                'nome' => "Windermere",
                'pais_id' => 245
            ],
            [
                'nome' => "Windsor",
                'pais_id' => 245
            ],
            [
                'nome' => "Winsford",
                'pais_id' => 245
            ],
            [
                'nome' => "Winslow",
                'pais_id' => 245
            ],
            [
                'nome' => "Winterton",
                'pais_id' => 245
            ],
            [
                'nome' => "Wirksworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Wisbech",
                'pais_id' => 245
            ],
            [
                'nome' => "Wishaw",
                'pais_id' => 245
            ],
            [
                'nome' => "Witham",
                'pais_id' => 245
            ],
            [
                'nome' => "Withernsea",
                'pais_id' => 245
            ],
            [
                'nome' => "Witney",
                'pais_id' => 245
            ],
            [
                'nome' => "Wiveliscombe",
                'pais_id' => 245
            ],
            [
                'nome' => "Wivenhoe",
                'pais_id' => 245
            ],
            [
                'nome' => "Woburn",
                'pais_id' => 245
            ],
            [
                'nome' => "Woburn Sands",
                'pais_id' => 245
            ],
            [
                'nome' => "Woking",
                'pais_id' => 245
            ],
            [
                'nome' => "Wokingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Wolsingham",
                'pais_id' => 245
            ],
            [
                'nome' => "Wolverhampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Wombwell",
                'pais_id' => 245
            ],
            [
                'nome' => "Woodbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Woodhall Spa",
                'pais_id' => 245
            ],
            [
                'nome' => "Woodley",
                'pais_id' => 245
            ],
            [
                'nome' => "Woodstock",
                'pais_id' => 245
            ],
            [
                'nome' => "Wooler",
                'pais_id' => 245
            ],
            [
                'nome' => "Worcester",
                'pais_id' => 245
            ],
            [
                'nome' => "Workington",
                'pais_id' => 245
            ],
            [
                'nome' => "Worksop",
                'pais_id' => 245
            ],
            [
                'nome' => "Worsbrough",
                'pais_id' => 245
            ],
            [
                'nome' => "Worsley",
                'pais_id' => 245
            ],
            [
                'nome' => "Worthing",
                'pais_id' => 245
            ],
            [
                'nome' => "Wotton Cross",
                'pais_id' => 245
            ],
            [
                'nome' => "Wotton-under-Edge",
                'pais_id' => 245
            ],
            [
                'nome' => "Wragby",
                'pais_id' => 245
            ],
            [
                'nome' => "Wrexham / Wrecsam",
                'pais_id' => 245
            ],
            [
                'nome' => "Wymondham",
                'pais_id' => 245
            ],
            [
                'nome' => "Yarm",
                'pais_id' => 245
            ],
            [
                'nome' => "Yarmouth",
                'pais_id' => 245
            ],
            [
                'nome' => "Yate",
                'pais_id' => 245
            ],
            [
                'nome' => "Yateley",
                'pais_id' => 245
            ],
            [
                'nome' => "Y Bala",
                'pais_id' => 245
            ],
            [
                'nome' => "Yeadon",
                'pais_id' => 245
            ],
            [
                'nome' => "Yeovil",
                'pais_id' => 245
            ],
            [
                'nome' => "York",
                'pais_id' => 245
            ],
            [
                'nome' => "Ystradgynlais",
                'pais_id' => 245
            ],
            [
                'nome' => "Ystrad Mynach",
                'pais_id' => 245
            ],
            [
                'nome' => "Acton",
                'pais_id' => 245
            ],
            [
                'nome' => "Alameda Place",
                'pais_id' => 245
            ],
            [
                'nome' => "Aperfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Barking",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnes",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnet",
                'pais_id' => 245
            ],
            [
                'nome' => "Barnet Gate",
                'pais_id' => 245
            ],
            [
                'nome' => "Battersea",
                'pais_id' => 245
            ],
            [
                'nome' => "Beckenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Bermondsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Bethnal Green",
                'pais_id' => 245
            ],
            [
                'nome' => "Bexley",
                'pais_id' => 245
            ],
            [
                'nome' => "Biggin Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Bow",
                'pais_id' => 245
            ],
            [
                'nome' => "Brentford",
                'pais_id' => 245
            ],
            [
                'nome' => "Bromley",
                'pais_id' => 245
            ],
            [
                'nome' => "Camberwell",
                'pais_id' => 245
            ],
            [
                'nome' => "Camden Town",
                'pais_id' => 245
            ],
            [
                'nome' => "Carshalton",
                'pais_id' => 245
            ],
            [
                'nome' => "Catford",
                'pais_id' => 245
            ],
            [
                'nome' => "Central Parade",
                'pais_id' => 245
            ],
            [
                'nome' => "Chase Village",
                'pais_id' => 245
            ],
            [
                'nome' => "Chelsea",
                'pais_id' => 245
            ],
            [
                'nome' => "Chingford",
                'pais_id' => 245
            ],
            [
                'nome' => "Chislehurst",
                'pais_id' => 245
            ],
            [
                'nome' => "Chiswick",
                'pais_id' => 245
            ],
            [
                'nome' => "Clapham",
                'pais_id' => 245
            ],
            [
                'nome' => "Clock House",
                'pais_id' => 245
            ],
            [
                'nome' => "Coalmakers Wharf",
                'pais_id' => 245
            ],
            [
                'nome' => "Coldharbour",
                'pais_id' => 245
            ],
            [
                'nome' => "Cole Park",
                'pais_id' => 245
            ],
            [
                'nome' => "Colney Hatch",
                'pais_id' => 245
            ],
            [
                'nome' => "Coulsdon",
                'pais_id' => 245
            ],
            [
                'nome' => "Cowley Peachy",
                'pais_id' => 245
            ],
            [
                'nome' => "Crayford",
                'pais_id' => 245
            ],
            [
                'nome' => "Croydon",
                'pais_id' => 245
            ],
            [
                'nome' => "Dagenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Denham",
                'pais_id' => 245
            ],
            [
                'nome' => "Deptford",
                'pais_id' => 245
            ],
            [
                'nome' => "Ealing",
                'pais_id' => 245
            ],
            [
                'nome' => "Eastcote Village",
                'pais_id' => 245
            ],
            [
                'nome' => "East Ham",
                'pais_id' => 245
            ],
            [
                'nome' => "Edgware",
                'pais_id' => 245
            ],
            [
                'nome' => "Edmonton",
                'pais_id' => 245
            ],
            [
                'nome' => "Eltham",
                'pais_id' => 245
            ],
            [
                'nome' => "Enfield",
                'pais_id' => 245
            ],
            [
                'nome' => "Erith",
                'pais_id' => 245
            ],
            [
                'nome' => "Feltham",
                'pais_id' => 245
            ],
            [
                'nome' => "Festubert Place",
                'pais_id' => 245
            ],
            [
                'nome' => "Finchley",
                'pais_id' => 245
            ],
            [
                'nome' => "Foxbury",
                'pais_id' => 245
            ],
            [
                'nome' => "Frank Whipple Estate",
                'pais_id' => 245
            ],
            [
                'nome' => "Friern Barnet",
                'pais_id' => 245
            ],
            [
                'nome' => "Fulham",
                'pais_id' => 245
            ],
            [
                'nome' => "Gallows Corner",
                'pais_id' => 245
            ],
            [
                'nome' => "Greenford",
                'pais_id' => 245
            ],
            [
                'nome' => "Greenwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Hackney",
                'pais_id' => 245
            ],
            [
                'nome' => "Hacton",
                'pais_id' => 245
            ],
            [
                'nome' => "Hallsville Quarter",
                'pais_id' => 245
            ],
            [
                'nome' => "Hammersmith",
                'pais_id' => 245
            ],
            [
                'nome' => "Hampstead",
                'pais_id' => 245
            ],
            [
                'nome' => "Hampton",
                'pais_id' => 245
            ],
            [
                'nome' => "Harefield Grove",
                'pais_id' => 245
            ],
            [
                'nome' => "Harrow",
                'pais_id' => 245
            ],
            [
                'nome' => "Hayes",
                'pais_id' => 245
            ],
            [
                'nome' => "Hayes Town",
                'pais_id' => 245
            ],
            [
                'nome' => "Hendon",
                'pais_id' => 245
            ],
            [
                'nome' => "Highwood Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Hillingdon",
                'pais_id' => 245
            ],
            [
                'nome' => "Hitchin Square",
                'pais_id' => 245
            ],
            [
                'nome' => "Holders Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Hornchurch",
                'pais_id' => 245
            ],
            [
                'nome' => "Hornsey",
                'pais_id' => 245
            ],
            [
                'nome' => "Hornsey Vale",
                'pais_id' => 245
            ],
            [
                'nome' => "Hounslow",
                'pais_id' => 245
            ],
            [
                'nome' => "Ilford",
                'pais_id' => 245
            ],
            [
                'nome' => "Isle of Dogs",
                'pais_id' => 245
            ],
            [
                'nome' => "Isleworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Islington",
                'pais_id' => 245
            ],
            [
                'nome' => "Kensington",
                'pais_id' => 245
            ],
            [
                'nome' => "Kenton",
                'pais_id' => 245
            ],
            [
                'nome' => "Kingston upon Thames",
                'pais_id' => 245
            ],
            [
                'nome' => "Knight's Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Lewisham",
                'pais_id' => 245
            ],
            [
                'nome' => "Leyton",
                'pais_id' => 245
            ],
            [
                'nome' => "Merton",
                'pais_id' => 245
            ],
            [
                'nome' => "Mitcham",
                'pais_id' => 245
            ],
            [
                'nome' => "Morden",
                'pais_id' => 245
            ],
            [
                'nome' => "New Cross Gate",
                'pais_id' => 245
            ],
            [
                'nome' => "New Malden",
                'pais_id' => 245
            ],
            [
                'nome' => "Northolt",
                'pais_id' => 245
            ],
            [
                'nome' => "Northwood",
                'pais_id' => 245
            ],
            [
                'nome' => "Orpington",
                'pais_id' => 245
            ],
            [
                'nome' => "Paddington",
                'pais_id' => 245
            ],
            [
                'nome' => "Park Royal",
                'pais_id' => 245
            ],
            [
                'nome' => "Penge",
                'pais_id' => 245
            ],
            [
                'nome' => "Pinner",
                'pais_id' => 245
            ],
            [
                'nome' => "Poplar",
                'pais_id' => 245
            ],
            [
                'nome' => "Poynders Parade",
                'pais_id' => 245
            ],
            [
                'nome' => "Purley",
                'pais_id' => 245
            ],
            [
                'nome' => "Putney",
                'pais_id' => 245
            ],
            [
                'nome' => "Rainham",
                'pais_id' => 245
            ],
            [
                'nome' => "Risley Close",
                'pais_id' => 245
            ],
            [
                'nome' => "Romford",
                'pais_id' => 245
            ],
            [
                'nome' => "Ruislip",
                'pais_id' => 245
            ],
            [
                'nome' => "Ruislip Gardens",
                'pais_id' => 245
            ],
            [
                'nome' => "Rushmore Hill",
                'pais_id' => 245
            ],
            [
                'nome' => "Sidcup",
                'pais_id' => 245
            ],
            [
                'nome' => "Southall",
                'pais_id' => 245
            ],
            [
                'nome' => "South Bromley",
                'pais_id' => 245
            ],
            [
                'nome' => "Southgate",
                'pais_id' => 245
            ],
            [
                'nome' => "Southwark",
                'pais_id' => 245
            ],
            [
                'nome' => "Stanmore",
                'pais_id' => 245
            ],
            [
                'nome' => "Stepney",
                'pais_id' => 245
            ],
            [
                'nome' => "Stoke Newington",
                'pais_id' => 245
            ],
            [
                'nome' => "Stratford",
                'pais_id' => 245
            ],
            [
                'nome' => "Streatham",
                'pais_id' => 245
            ],
            [
                'nome' => "Surbiton",
                'pais_id' => 245
            ],
            [
                'nome' => "Sutton",
                'pais_id' => 245
            ],
            [
                'nome' => "Tavern Quay",
                'pais_id' => 245
            ],
            [
                'nome' => "Teddington",
                'pais_id' => 245
            ],
            [
                'nome' => "The Mews",
                'pais_id' => 245
            ],
            [
                'nome' => "Tottenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Tower Gardens",
                'pais_id' => 245
            ],
            [
                'nome' => "Trinity Buoy Wharf",
                'pais_id' => 245
            ],
            [
                'nome' => "Twickenham",
                'pais_id' => 245
            ],
            [
                'nome' => "Unity Place",
                'pais_id' => 245
            ],
            [
                'nome' => "Upminster",
                'pais_id' => 245
            ],
            [
                'nome' => "Uxbridge",
                'pais_id' => 245
            ],
            [
                'nome' => "Wallington",
                'pais_id' => 245
            ],
            [
                'nome' => "Wallington Square",
                'pais_id' => 245
            ],
            [
                'nome' => "Walthamstow",
                'pais_id' => 245
            ],
            [
                'nome' => "Wandle Park",
                'pais_id' => 245
            ],
            [
                'nome' => "Wandsworth",
                'pais_id' => 245
            ],
            [
                'nome' => "Wanstead",
                'pais_id' => 245
            ],
            [
                'nome' => "Wembley",
                'pais_id' => 245
            ],
            [
                'nome' => "West Drayton",
                'pais_id' => 245
            ],
            [
                'nome' => "West Ham",
                'pais_id' => 245
            ],
            [
                'nome' => "Willesden",
                'pais_id' => 245
            ],
            [
                'nome' => "Wimbledon",
                'pais_id' => 245
            ],
            [
                'nome' => "Woodford",
                'pais_id' => 245
            ],
            [
                'nome' => "Wood Green",
                'pais_id' => 245
            ],
            [
                'nome' => "Woolwich",
                'pais_id' => 245
            ],
            [
                'nome' => "Yiewsley",
                'pais_id' => 245
            ],
            [
                'nome' => "Unknown",
                'pais_id' => 245
            ],
        ];

        foreach($ukCitiesAndTowns as $city)
        {
            Cidade::create($city);
        }
    }
}
