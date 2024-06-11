function changeGender() {
  let x = document.getElementById("gender");
  let gender = x.value;
  let y = document.getElementById("genderOtherContainer");

  if (gender === "Other") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}

function goBack() {
  window.history.back();
}

// gender style

function setProvince() {
  let temp = document.getElementById("select-region");
  let region = temp.value;

  if (region === "NCR") {
    let selectProvince = document.getElementById("select-province");
    let option = selectProvince.options[0];
    option.textContent = "-- Invalid --";
    for (let i = selectProvince.options.length - 1; i > 0; i--) {
      selectProvince.remove(i);
    }

    setCity();
  } else if (region === "CAR") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Abra = document.createElement("option");
    Abra.text = "Abra";
    Abra.value = "Abra";
    select.add(Abra);

    let Apayao = document.createElement("option");
    Apayao.text = "Apayao";
    Apayao.value = "Apayao";
    select.add(Apayao);

    let Benguet = document.createElement("option");
    Benguet.text = "Benguet";
    Benguet.value = "Benguet";
    select.add(Benguet);

    let Ifugao = document.createElement("option");
    Ifugao.text = "Ifugao";
    Ifugao.value = "Ifugao";
    select.add(Ifugao);

    let Kalinga = document.createElement("option");
    Kalinga.text = "Kalinga";
    Kalinga.value = "Kalinga";
    select.add(Kalinga);

    let MountainProvince = document.createElement("option");
    MountainProvince.text = "Mountain Province";
    MountainProvince.value = "Mountain-Province";
    select.add(MountainProvince);
  } else if (region === "Region-I") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let IlocosNorte = document.createElement("option");
    IlocosNorte.text = "Ilocos Norte";
    IlocosNorte.value = "Ilocos-Norte";
    select.add(IlocosNorte);

    let IlocosSur = document.createElement("option");
    IlocosSur.text = "Ilocos Sur";
    IlocosSur.value = "Ilocos-Sur";
    select.add(IlocosSur);

    let LaUnion = document.createElement("option");
    LaUnion.text = "La Union";
    LaUnion.value = "La-Union";
    select.add(LaUnion);

    let Pangasinan = document.createElement("option");
    Pangasinan.text = "Pangasinan";
    Pangasinan.value = "Pangasinan";
    select.add(Pangasinan);
  } else if (region === "Region-II") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Batanes = document.createElement("option");
    Batanes.text = "Batanes";
    Batanes.value = "Batanes";
    select.add(Batanes);

    let Cagayan = document.createElement("option");
    Cagayan.text = "Cagayan";
    Cagayan.value = "Cagayan";
    select.add(Cagayan);

    let Isabela = document.createElement("option");
    Isabela.text = "Isabela";
    Isabela.value = "Isabela";
    select.add(Isabela);

    let Quirino = document.createElement("option");
    Quirino.text = "Quirino";
    Quirino.value = "Quirino";
    select.add(Quirino);

    let NuevaViscaya = document.createElement("option");
    NuevaViscaya.text = "Nueva Viscaya";
    NuevaViscaya.value = "Nueva-Viscaya";
    select.add(NuevaViscaya);
  } else if (region === "Region-III") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Aurora = document.createElement("option");
    Aurora.text = "Aurora";
    Aurora.value = "Aurora";
    select.add(Aurora);

    let Bataan = document.createElement("option");
    Bataan.text = "Bataan";
    Bataan.value = "Bataan";
    select.add(Bataan);

    let Bulacan = document.createElement("option");
    Bulacan.text = "Bulacan";
    Bulacan.value = "Bulacan";
    select.add(Bulacan);

    let NuevaEcija = document.createElement("option");
    NuevaEcija.text = "Nueva Ecija";
    NuevaEcija.value = "Nueva-Ecija";
    select.add(NuevaEcija);

    let Pampanga = document.createElement("option");
    Pampanga.text = "Pampanga";
    Pampanga.value = "Pampanga";
    select.add(Pampanga);

    let Tarlac = document.createElement("option");
    Tarlac.text = "Tarlac";
    Tarlac.value = "Tarlac";
    select.add(Tarlac);

    let Zambales = document.createElement("option");
    Zambales.text = "Zambales";
    Zambales.value = "Zambales";
    select.add(Zambales);
  } else if (region === "Region-IV-A") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Cavite = document.createElement("option");
    Cavite.text = "Cavite";
    Cavite.value = "Cavite";
    select.add(Cavite);

    let Laguna = document.createElement("option");
    Laguna.text = "Laguna";
    Laguna.value = "Laguna";
    select.add(Laguna);

    let Batangas = document.createElement("option");
    Batangas.text = "Batangas";
    Batangas.value = "Batangas";
    select.add(Batangas);

    let Rizal = document.createElement("option");
    Rizal.text = "Rizal";
    Rizal.value = "Rizal";
    select.add(Rizal);

    let QuezonProvince = document.createElement("option");
    QuezonProvince.text = "Quezon Province";
    QuezonProvince.value = "Quezon-Province";
    select.add(QuezonProvince);
  } else if (region === "Region-IV-B") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Mindoro = document.createElement("option");
    Mindoro.text = "Mindoro";
    Mindoro.value = "Mindoro";
    select.add(Mindoro);

    let Marinduque = document.createElement("option");
    Marinduque.text = "Marinduque";
    Marinduque.value = "Marinduque";
    select.add(Marinduque);

    let Romblon = document.createElement("option");
    Romblon.text = "Romblon";
    Romblon.value = "Romblon";
    select.add(Romblon);

    let Palawan = document.createElement("option");
    Palawan.text = "Palawan";
    Palawan.value = "Palawan";
    select.add(Palawan);
  } else if (region === "Region-V") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Albay = document.createElement("option");
    Albay.text = "Albay";
    Albay.value = "Albay";
    select.add(Albay);

    let CamarinesSur = document.createElement("option");
    CamarinesSur.text = "Camarines Sur";
    CamarinesSur.value = "Camarines-Sur";
    select.add(CamarinesSur);

    let CamarinesNorte = document.createElement("option");
    CamarinesNorte.text = "Camarines Norte";
    CamarinesNorte.value = "Camarines-Norte";
    select.add(CamarinesNorte);

    let Sorsogon = document.createElement("option");
    Sorsogon.text = "Sorsogon";
    Sorsogon.value = "Sorsogon";
    select.add(Sorsogon);

    let Catanduanes = document.createElement("option");
    Catanduanes.text = "Catanduanes";
    Catanduanes.value = "Catanduanes";
    select.add(Catanduanes);

    let Masbate = document.createElement("option");
    Masbate.text = "Masbate";
    Masbate.value = "Masbate";
    select.add(Masbate);
  } else if (region === "Region-VI") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Aklan = document.createElement("option");
    Aklan.text = "Aklan";
    Aklan.value = "Aklan";
    select.add(Aklan);

    let Antique = document.createElement("option");
    Antique.text = "Antique";
    Antique.value = "Antique";
    select.add(Antique);

    let NegrosOccidental = document.createElement("option");
    NegrosOccidental.text = "Negros Occidental";
    NegrosOccidental.value = "Negros-Occidental";
    select.add(NegrosOccidental);

    let Capiz = document.createElement("option");
    Capiz.text = "Capiz";
    Capiz.value = "Capiz";
    select.add(Capiz);

    let Guimaras = document.createElement("option");
    Guimaras.text = "Guimaras";
    Guimaras.value = "Guimaras";
    select.add(Guimaras);

    let Iloilo = document.createElement("option");
    Iloilo.text = "Iloilo";
    Iloilo.value = "Iloilo";
    select.add(Iloilo);
  } else if (region === "Region-VII") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Cebu = document.createElement("option");
    Cebu.text = "Cebu";
    Cebu.value = "Cebu";
    select.add(Cebu);

    let Bohol = document.createElement("option");
    Bohol.text = "Bohol";
    Bohol.value = "Bohol";
    select.add(Bohol);

    let NegrosOriental = document.createElement("option");
    NegrosOriental.text = "Negros Oriental";
    NegrosOriental.value = "Negros-Oriental";
    select.add(NegrosOriental);

    let Siquijor = document.createElement("option");
    Siquijor.text = "Siquijor";
    Siquijor.value = "Siquijor";
    select.add(Siquijor);
  } else if (region === "Region-VIII") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Leyte = document.createElement("option");
    Leyte.text = "Leyte";
    Leyte.value = "Leyte";
    select.add(Leyte);

    let SouthernLeyte = document.createElement("option");
    SouthernLeyte.text = "Southern Leyte";
    SouthernLeyte.value = "Southern-Leyte";
    select.add(SouthernLeyte);

    let Biliran = document.createElement("option");
    Biliran.text = "Biliran";
    Biliran.value = "Biliran";
    select.add(Biliran);

    let Samar = document.createElement("option");
    Samar.text = "Samar";
    Samar.value = "Samar";
    select.add(Samar);

    let EasternSamar = document.createElement("option");
    EasternSamar.text = "Eastern Samar";
    EasternSamar.value = "Eastern-Samar";
    select.add(EasternSamar);

    let NorthernSamar = document.createElement("option");
    NorthernSamar.text = "Northern Samar";
    NorthernSamar.value = "Northern-Samar";
    select.add(NorthernSamar);
  } else if (region === "Region-IX") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let ZamboangadelNorte = document.createElement("option");
    ZamboangadelNorte.text = "Zamboanga del Norte";
    ZamboangadelNorte.value = "Zamboanga-del-Norte";
    select.add(ZamboangadelNorte);

    let ZamboangaSibugay = document.createElement("option");
    ZamboangaSibugay.text = "Zamboanga Sibugay";
    ZamboangaSibugay.value = "Zamboanga-Sibugay";
    select.add(ZamboangaSibugay);

    let ZamboangadelSur = document.createElement("option");
    ZamboangadelSur.text = "Zamboanga del Sur";
    ZamboangadelSur.value = "Zamboanga-del-Sur";
    select.add(ZamboangadelSur);
  } else if (region === "Region-X") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let MisamisOriental = document.createElement("option");
    MisamisOriental.text = "Misamis Oriental";
    MisamisOriental.value = "Misamis-Oriental";
    select.add(MisamisOriental);

    let MisamisOccidental = document.createElement("option");
    MisamisOccidental.text = "Misamis Occidental";
    MisamisOccidental.value = "Misamis-Occidental";
    select.add(MisamisOccidental);

    let Bukidnon = document.createElement("option");
    Bukidnon.text = "Bukidnon";
    Bukidnon.value = "Bukidnon";
    select.add(Bukidnon);

    let LanaodelNorte = document.createElement("option");
    LanaodelNorte.text = "Lanao del Norte";
    LanaodelNorte.value = "Lanao-del-Norte";
    select.add(LanaodelNorte);

    let Camiguin = document.createElement("option");
    Camiguin.text = "Camiguin";
    Camiguin.value = "Camiguin";
    select.add(Camiguin);
  } else if (region === "Region-XI") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let DavaodelSur = document.createElement("option");
    DavaodelSur.text = "Davao del Sur";
    DavaodelSur.value = "Davao-del-Sur";
    select.add(DavaodelSur);

    let DavaodelNorte = document.createElement("option");
    DavaodelNorte.text = "Davao del Norte";
    DavaodelNorte.value = "Davao-del-Norte";
    select.add(DavaodelNorte);

    let DavaoOriental = document.createElement("option");
    DavaoOriental.text = "Davao Oriental";
    DavaoOriental.value = "Davao-Oriental";
    select.add(DavaoOriental);

    let DavaoOccidental = document.createElement("option");
    DavaoOccidental.text = "Davao Occidental";
    DavaoOccidental.value = "Davao-Occidental";
    select.add(DavaoOccidental);

    let CompostelaValley = document.createElement("option");
    CompostelaValley.text = "Compostela Valley";
    CompostelaValley.value = "Compostela-Valley";
    select.add(CompostelaValley);
  } else if (region === "Region-XII") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let SouthCotabato = document.createElement("option");
    SouthCotabato.text = "South Cotabato";
    SouthCotabato.value = "South-Cotabato";
    select.add(SouthCotabato);

    let Cotabato = document.createElement("option");
    Cotabato.text = "Cotabato";
    Cotabato.value = "Cotabato";
    select.add(Cotabato);

    let SultanKudarat = document.createElement("option");
    SultanKudarat.text = "Sultan Kudarat";
    SultanKudarat.value = "Sultan-Kudarat";
    select.add(SultanKudarat);

    let Sarangani = document.createElement("option");
    Sarangani.text = "Sarangani";
    Sarangani.value = "Sarangani";
    select.add(Sarangani);
  } else if (region === "Region-XIII") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let AgusandelNorte = document.createElement("option");
    AgusandelNorte.text = "Agusan del Norte";
    AgusandelNorte.value = "Agusan-del-Norte";
    select.add(AgusandelNorte);

    let AgusandelSur = document.createElement("option");
    AgusandelSur.text = "Agusan del Sur";
    AgusandelSur.value = "Agusan-del-Sur";
    select.add(AgusandelSur);

    let DinagatIslands = document.createElement("option");
    DinagatIslands.text = "Dinagat Islands";
    DinagatIslands.value = "Dinagat-Islands";
    select.add(DinagatIslands);
  } else if (region === "BARMM") {
    let select = document.getElementById("select-province");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Province --";

    let Basilan = document.createElement("option");
    Basilan.text = "Basilan";
    Basilan.value = "Basilan";
    select.add(Basilan);

    let LanaodelSur = document.createElement("option");
    LanaodelSur.text = "Lanao del Sur";
    LanaodelSur.value = "Lanao-del-Sur";
    select.add(LanaodelSur);

    let MaguindanaodelNorte = document.createElement("option");
    MaguindanaodelNorte.text = "Maguindanao del Norte";
    MaguindanaodelNorte.value = "Maguindanao-del-Norte";
    select.add(MaguindanaodelNorte);

    let MaguindanaodelSur = document.createElement("option");
    MaguindanaodelSur.text = "Maguindanao del Sur";
    MaguindanaodelSur.value = "Maguindanao-del-Sur";
    select.add(MaguindanaodelSur);

    let Sulu = document.createElement("option");
    Sulu.text = "Sulu";
    Sulu.value = "Sulu";
    select.add(Sulu);

    let TawiTawi = document.createElement("option");
    TawiTawi.text = "Tawi-Tawi";
    TawiTawi.value = "Tawi-Tawi";
    select.add(TawiTawi);
  }
}

function setCity() {
  let temp = document.getElementById("select-region");
  let region = temp.value;

  if (region === "NCR") {
    let select = document.getElementById("select-city");

    for (let i = select.options.length - 1; i > 0; i--) {
      select.remove(i);
    }

    let option = select.options[0];
    option.textContent = "-- Municipality/City --";

    let test_array = [
      "Caloocan",
      "LasPinas",
      "Makati",
      "Malabon",
      "Mandaluyong",
      "Manila",
      "Marikina",
      "Muntinlipa",
      "Navotas",
      "Paranaque",
      "Pasay",
      "Pasig",
      "Pateros",
      "Quezon",
      "SanJuan",
      "Taguig",
      "Valenzuela",
    ];
    let text_array = [
      "Caloocan",
      "Las Pinas",
      "Makati",
      "Malabon",
      "Mandaluyong",
      "Manila",
      "Marikina",
      "Muntinlipa",
      "Navotas",
      "Paranaque",
      "Pasay",
      "Pasig",
      "Pateros",
      "Quezon",
      "San Juan",
      "Taguig",
      "Valenzuela",
    ];
    let value_array = [
      "Caloocan",
      "Las-Pinas",
      "Makati",
      "Malabon",
      "Mandaluyong",
      "Manila",
      "Marikina",
      "Muntinlipa",
      "Navotas",
      "Paranaque",
      "Pasay",
      "Pasig",
      "Pateros",
      "Quezon",
      "San-Juan",
      "Taguig",
      "Valenzuela",
    ];

    for (let i = 0; i < test_array.length; i++) {
      test_array[i] = document.createElement("option");
      test_array[i].text = `${text_array[i]}`;
      test_array[i].value = value_array[i];
      select.add(test_array[i]);
    }
  } else {
    let temp = document.getElementById("select-province");
    let province = temp.value;

    if (province === "Abra") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bangued",
        "Boliney",
        "Bucay",
        "Bucloc",
        "Daguioman",
        "Danglas",
        "Dolores",
        "LaPaz",
        "Lacub",
        "Langangilang",
        "Lagayan",
        "Langiden",
        "Licuan-Baay",
        "Luba",
        "Malibcong",
        "Manabo",
        "Penarrubia",
        "Pidigan",
        "Pilar",
        "Sallapadan",
        "SanIsidro",
        "SanJuan",
        "SanQuintin",
        "Tayum",
        "Tineg",
        "Tubo",
        "Villaviviosa",
      ];
      let text_array = [
        "Bangued",
        "Boliney",
        "Bucay",
        "Bucloc",
        "Daguioman",
        "Danglas",
        "Dolores",
        "La Paz",
        "Lacub",
        "Langangilang",
        "Lagayan",
        "Langiden",
        "Licuan-Baay",
        "Luba",
        "Malibcong",
        "Manabo",
        "Penarrubia",
        "Pidigan",
        "Pilar",
        "Sallapadan",
        "San Isidro",
        "San Juan",
        "San Quintin",
        "Tayum",
        "Tineg",
        "Tubo",
        "Villaviviosa",
      ];
      let value_array = [
        "Bangued",
        "Boliney",
        "Bucay",
        "Bucloc",
        "Daguioman",
        "Danglas",
        "Dolores",
        "La-Paz",
        "Lacub",
        "Langangilang",
        "Lagayan",
        "Langiden",
        "Licuan-Baay",
        "Luba",
        "Malibcong",
        "Manabo",
        "Penarrubia",
        "Pidigan",
        "Pilar",
        "Sallapadan",
        "San-Isidro",
        "San-Juan",
        "San-Quintin",
        "Tayum",
        "Tineg",
        "Tubo",
        "Villaviviosa",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Apayao") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Calanasan",
        "Conner",
        "Flora",
        "Kabugao",
        "Luna",
        "Pudtol",
        "SantaMarcela",
      ];
      let text_array = [
        "Calanasan",
        "Conner",
        "Flora",
        "Kabugao",
        "Luna",
        "Pudtol",
        "Santa Marcela",
      ];
      let value_array = [
        "Calanasan",
        "Conner",
        "Flora",
        "Kabugao",
        "Luna",
        "Pudtol",
        "Santa-Marcela",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Benguet") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Atok",
        "Bakun",
        "Baguio",
        "Bokod",
        "Buguias",
        "Itogon",
        "Kabayan",
        "Kapangan",
        "Kibungan",
        "LaTrinidad",
        "Mankayan",
        "Sablan",
        "Tuba",
        "Tublay",
      ];
      let text_array = [
        "Atok",
        "Bakun",
        "Baguio",
        "Bokod",
        "Buguias",
        "Itogon",
        "Kabayan",
        "Kapangan",
        "Kibungan",
        "La Trinidad",
        "Mankayan",
        "Sablan",
        "Tuba",
        "Tublay",
      ];
      let value_array = [
        "Atok",
        "Bakun",
        "Baguio",
        "Bokod",
        "Buguias",
        "Itogon",
        "Kabayan",
        "Kapangan",
        "Kibungan",
        "La-Trinidad",
        "Mankayan",
        "Sablan",
        "Tuba",
        "Tublay",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Ifugao") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Aguinaldo",
        "AlfonsoLista",
        "Asipulo",
        "Banaue",
        "Hingyon",
        "Hungduan",
        "Kiangan",
        "Lagawe",
        "Lamut",
        "Mayoyao",
        "Tinoc",
      ];
      let text_array = [
        "Aguinaldo",
        "Alfonso Lista",
        "Asipulo",
        "Banaue",
        "Hingyon",
        "Hungduan",
        "Kiangan",
        "Lagawe",
        "Lamut",
        "Mayoyao",
        "Tinoc",
      ];
      let value_array = [
        "Aguinaldo",
        "Alfonso-Lista",
        "Asipulo",
        "Banaue",
        "Hingyon",
        "Hungduan",
        "Kiangan",
        "Lagawe",
        "Lamut",
        "Mayoyao",
        "Tinoc",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Kalinga") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Balbalan",
        "Lubuagan",
        "Pasil",
        "Pinukpuk",
        "Rizal",
        "Tabuk",
        "Tanudan",
        "Tinglayan",
      ];
      let text_array = [
        "Balbalan",
        "Lubuagan",
        "Pasil",
        "Pinukpuk",
        "Rizal",
        "Tabuk",
        "Tanudan",
        "Tinglayan",
      ];
      let value_array = [
        "Balbalan",
        "Lubuagan",
        "Pasil",
        "Pinukpuk",
        "Rizal",
        "Tabuk",
        "Tanudan",
        "Tinglayan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Mountain-Province") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Barlig",
        "Bauko",
        "Besao",
        "Bontoc",
        "Natonin",
        "Paracelis",
        "Sabangan",
        "Sadanga",
        "Sagada",
        "Sagada",
        "Tadian",
      ];
      let text_array = [
        "Barlig",
        "Bauko",
        "Besao",
        "Bontoc",
        "Natonin",
        "Paracelis",
        "Sabangan",
        "Sadanga",
        "Sagada",
        "Sagada",
        "Tadian",
      ];
      let value_array = [
        "Barlig",
        "Bauko",
        "Besao",
        "Bontoc",
        "Natonin",
        "Paracelis",
        "Sabangan",
        "Sadanga",
        "Sagada",
        "Sagada",
        "Tadian",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Ilocos-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Adams",
        "Bacarra",
        "Badoc",
        "Bangui",
        "Banna",
        "Batac",
        "Burgos",
        "Carasi",
        "Currimao",
        "Dingras",
        "Dumalneg",
        "Laoag",
        "Carasi",
        "Currimao",
        "Dingras",
        "Dumalneg",
        "Laoag",
        "Marcos",
        "NuevaEra",
        "Pagudpud",
        "Paoay",
        "Pasuquin",
        "Piddig",
        "Pinili",
        "SanNicolas",
        "Sarrat",
        "Solsona",
        "Vintar",
      ];
      let text_array = [
        "Adams",
        "Bacarra",
        "Badoc",
        "Bangui",
        "Banna",
        "Batac",
        "Burgos",
        "Carasi",
        "Currimao",
        "Dingras",
        "Dumalneg",
        "Laoag",
        "Carasi",
        "Currimao",
        "Dingras",
        "Dumalneg",
        "Laoag",
        "Marcos",
        "NuevaEra",
        "Pagudpud",
        "Paoay",
        "Pasuquin",
        "Piddig",
        "Pinili",
        "SanNicolas",
        "Sarrat",
        "Solsona",
        "Vintar",
      ];
      let value_array = [
        "Adams",
        "Bacarra",
        "Badoc",
        "Bangui",
        "Banna",
        "Batac",
        "Burgos",
        "Carasi",
        "Currimao",
        "Dingras",
        "Dumalneg",
        "Laoag",
        "Carasi",
        "Currimao",
        "Dingras",
        "Dumalneg",
        "Laoag",
        "Marcos",
        "NuevaEra",
        "Pagudpud",
        "Paoay",
        "Pasuquin",
        "Piddig",
        "Pinili",
        "SanNicolas",
        "Sarrat",
        "Solsona",
        "Vintar",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Ilocos-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alilem",
        "Banayoyo",
        "Bantay",
        "Burgos",
        "Cabugao",
        "Candon",
        "Caoayan",
        "Cervantes",
        "Galimuyod",
        "GregoriodelPilar",
        "Lidlidda",
        "Magsingal",
        "Nagbukel",
        "Narvacan",
        "Quirino",
        "Salcedo",
        "SanEmilio",
        "SanEsteban",
        "SanIldefonso",
        "SanJuan",
        "SanVicente",
        "Santa",
        "SantaCatalina",
        "SantaCruz",
        "SantaLucia",
        "SantaMaria",
        "Santiago",
        "SantoDomingo",
        "Sigay",
        "Sinait",
        "Sugpon",
        "Suyo",
        "Tagudin",
        "Vigan",
      ];
      let text_array = [
        "Alilem",
        "Banayoyo",
        "Bantay",
        "Burgos",
        "Cabugao",
        "Candon",
        "Caoayan",
        "Cervantes",
        "Galimuyod",
        "Gregorio del Pilar",
        "Lidlidda",
        "Magsingal",
        "Nagbukel",
        "Narvacan",
        "Quirino",
        "Salcedo",
        "San Emilio",
        "San Esteban",
        "San Ildefonso",
        "San Juan",
        "San Vicente",
        "Santa",
        "Santa Catalina",
        "Santa Cruz",
        "Santa Lucia",
        "Santa Maria",
        "Santiago",
        "Santo Domingo",
        "Sigay",
        "Sinait",
        "Sugpon",
        "Suyo",
        "Tagudin",
        "Vigan",
      ];
      let value_array = [
        "Alilem",
        "Banayoyo",
        "Bantay",
        "Burgos",
        "Cabugao",
        "Candon",
        "Caoayan",
        "Cervantes",
        "Galimuyod",
        "Gregorio-del-Pilar",
        "Lidlidda",
        "Magsingal",
        "Nagbukel",
        "Narvacan",
        "Quirino",
        "Salcedo",
        "San-Emilio",
        "San-Esteban",
        "San-Ildefonso",
        "San-Juan",
        "San-Vicente",
        "Santa",
        "Santa-Catalina",
        "Santa-Cruz",
        "Santa-Lucia",
        "Santa-Maria",
        "Santiago",
        "Santo-Domingo",
        "Sigay",
        "Sinait",
        "Sugpon",
        "Suyo",
        "Tagudin",
        "Vigan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "La-Union") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Agoo",
        "Aringay",
        "Bacnotan",
        "Bagulin",
        "Balaoan",
        "Bangar",
        "Bauang",
        "Burgos",
        "Caba",
        "Luna",
        "Naguilian",
        "Pugo",
        "Rosario",
        "SanFernando",
        "SanGabriel",
        "SanJuan",
        "SantoTomas",
        "Santol",
        "Sudipen",
        "Tubao",
      ];
      let text_array = [
        "Agoo",
        "Aringay",
        "Bacnotan",
        "Bagulin",
        "Balaoan",
        "Bangar",
        "Bauang",
        "Burgos",
        "Caba",
        "Luna",
        "Naguilian",
        "Pugo",
        "Rosario",
        "SanFernando",
        "SanGabriel",
        "SanJuan",
        "SantoTomas",
        "Santol",
        "Sudipen",
        "Tubao",
      ];
      let value_array = [
        "Agoo",
        "Aringay",
        "Bacnotan",
        "Bagulin",
        "Balaoan",
        "Bangar",
        "Bauang",
        "Burgos",
        "Caba",
        "Luna",
        "Naguilian",
        "Pugo",
        "Rosario",
        "SanFernando",
        "SanGabriel",
        "SanJuan",
        "SantoTomas",
        "Santol",
        "Sudipen",
        "Tubao",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Pangasinan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Agno",
        "Aguilar",
        "Alaminos",
        "Alcala",
        "Anda",
        "Asingan",
        "Balungao",
        "Bani",
        "Basista",
        "Bautista",
        "Bayambang",
        "Binalonan",
        "Binmaley",
        "Bolinao",
        "Bugallon",
        "Burgos",
        "Calasiao",
        "Dagupan",
        "Dasol",
        "Infanta",
        "Labrador",
        "Laoac",
        "Lingayen",
        "Mabini",
        "Malasiqui",
        "Manaoag",
        "Mangaldan",
        "Mangatarem",
        "Mapandan",
        "Natividad",
        "Pozorrubio",
        "Rosales",
        "SanCarlos",
        "SanFabian",
        "SanJacinto",
        "SanManuel",
        "SanNicolas",
        "SanQuintin",
        "SantaBarbara",
        "SantaMaria",
        "SantoTomas",
        "Sison",
        "Sual",
        "Tayug",
        "Umingan",
        "Urbiztondo",
        "Urdaneta",
        "Villasis",
      ];
      let text_array = [
        "Agno",
        "Aguilar",
        "Alaminos",
        "Alcala",
        "Anda",
        "Asingan",
        "Balungao",
        "Bani",
        "Basista",
        "Bautista",
        "Bayambang",
        "Binalonan",
        "Binmaley",
        "Bolinao",
        "Bugallon",
        "Burgos",
        "Calasiao",
        "Dagupan",
        "Dasol",
        "Infanta",
        "Labrador",
        "Laoac",
        "Lingayen",
        "Mabini",
        "Malasiqui",
        "Manaoag",
        "Mangaldan",
        "Mangatarem",
        "Mapandan",
        "Natividad",
        "Pozorrubio",
        "Rosales",
        "San Carlos",
        "San Fabian",
        "San Jacinto",
        "San Manuel",
        "San Nicolas",
        "San Quintin",
        "Santa Barbara",
        "Santa Maria",
        "Santo Tomas",
        "Sison",
        "Sual",
        "Tayug",
        "Umingan",
        "Urbiztondo",
        "Urdaneta",
        "Villasis",
      ];
      let value_array = [
        "Agno",
        "Aguilar",
        "Alaminos",
        "Alcala",
        "Anda",
        "Asingan",
        "Balungao",
        "Bani",
        "Basista",
        "Bautista",
        "Bayambang",
        "Binalonan",
        "Binmaley",
        "Bolinao",
        "Bugallon",
        "Burgos",
        "Calasiao",
        "Dagupan",
        "Dasol",
        "Infanta",
        "Labrador",
        "Laoac",
        "Lingayen",
        "Mabini",
        "Malasiqui",
        "Manaoag",
        "Mangaldan",
        "Mangatarem",
        "Mapandan",
        "Natividad",
        "Pozorrubio",
        "Rosales",
        "San-Carlos",
        "San-Fabian",
        "San-Jacinto",
        "San-Manuel",
        "San-Nicolas",
        "San-Quintin",
        "Santa-Barbara",
        "Santa-Maria",
        "Santo-Tomas",
        "Sison",
        "Sual",
        "Tayug",
        "Umingan",
        "Urbiztondo",
        "Urdaneta",
        "Villasis",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Batanes") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Basco",
        "Itbayat",
        "Ivana",
        "Mahatao",
        "Sabtang",
        "Uyugan",
      ];
      let text_array = [
        "Basco",
        "Itbayat",
        "Ivana",
        "Mahatao",
        "Sabtang",
        "Uyugan",
      ];
      let value_array = [
        "Basco",
        "Itbayat",
        "Ivana",
        "Mahatao",
        "Sabtang",
        "Uyugan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Cagayan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Abulug",
        "Alcala",
        "Allacapan",
        "Amulug",
        "Appari",
        "Baggao",
        "Ballesteros",
        "Buguey",
        "Calayan",
        "Camalaniugan",
        "Claveria",
        "Enrile",
        "Gattaran",
        "Gonzaga",
        "Iguig",
        "Lal-lo",
        "Lasam",
        "Pamplona",
        "Penablanca",
        "Piat",
        "Rizal",
        "Sanchez-Mira",
        "SantaAna",
        "SantaPraxedes",
        "SantaTeresita",
        "SantoNino",
        "Solana",
        "Tuao",
        "Tuguegarao",
      ];
      let text_array = [
        "Abulug",
        "Alcala",
        "Allacapan",
        "Amulug",
        "Appari",
        "Baggao",
        "Ballesteros",
        "Buguey",
        "Calayan",
        "Camalaniugan",
        "Claveria",
        "Enrile",
        "Gattaran",
        "Gonzaga",
        "Iguig",
        "Lal-lo",
        "Lasam",
        "Pamplona",
        "Penablanca",
        "Piat",
        "Rizal",
        "Sanchez-Mira",
        "Santa Ana",
        "Santa Praxedes",
        "Santa Teresita",
        "Santo Nino",
        "Solana",
        "Tuao",
        "Tuguegarao",
      ];
      let value_array = [
        "Abulug",
        "Alcala",
        "Allacapan",
        "Amulug",
        "Appari",
        "Baggao",
        "Ballesteros",
        "Buguey",
        "Calayan",
        "Camalaniugan",
        "Claveria",
        "Enrile",
        "Gattaran",
        "Gonzaga",
        "Iguig",
        "Lal-lo",
        "Lasam",
        "Pamplona",
        "Penablanca",
        "Piat",
        "Rizal",
        "Sanchez-Mira",
        "Santa-Ana",
        "Santa-Praxedes",
        "Santa-Teresita",
        "Santo-Nino",
        "Solana",
        "Tuao",
        "Tuguegarao",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Isabela") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alicia",
        "Angadanan",
        "Aurora",
        "BenitoSoliven",
        "Burgos",
        "Cabagan",
        "Cabatuan",
        "Cauayan",
        "Cordon",
        "DelfinAlbano",
        "Dinapigue",
        "Divilacan",
        "Echague",
        "Gamu",
        "Ilagan",
        "Jones",
        "Luna",
        "Maconacon",
        "Mallig",
        "Naguilian",
        "Palanan",
        "Quezon",
        "Quirino",
        "Ramon",
        "ReinaMercedes",
        "Roxas",
        "SanAgustin",
        "SanGuillermo",
        "SanIsidro",
        "SanManuel",
        "SanMariano",
        "SanMateo",
        "SanPablo",
        "SantaMaria",
        "Santiago",
        "SantoTomas",
        "Tumauini",
      ];
      let text_array = [
        "Alicia",
        "Angadanan",
        "Aurora",
        "Benito Soliven",
        "Burgos",
        "Cabagan",
        "Cabatuan",
        "Cauayan",
        "Cordon",
        "Delfin Albano",
        "Dinapigue",
        "Divilacan",
        "Echague",
        "Gamu",
        "Ilagan",
        "Jones",
        "Luna",
        "Maconacon",
        "Mallig",
        "Naguilian",
        "Palanan",
        "Quezon",
        "Quirino",
        "Ramon",
        "Reina Mercedes",
        "Roxas",
        "San Agustin",
        "San Guillermo",
        "San Isidro",
        "San Manuel",
        "San Mariano",
        "San Mateo",
        "San Pablo",
        "Santa Maria",
        "Santiago",
        "Santo Tomas",
        "Tumauini",
      ];
      let value_array = [
        "Alicia",
        "Angadanan",
        "Aurora",
        "Benito-Soliven",
        "Burgos",
        "Cabagan",
        "Cabatuan",
        "Cauayan",
        "Cordon",
        "Delfin-Albano",
        "Dinapigue",
        "Divilacan",
        "Echague",
        "Gamu",
        "Ilagan",
        "Jones",
        "Luna",
        "Maconacon",
        "Mallig",
        "Naguilian",
        "Palanan",
        "Quezon",
        "Quirino",
        "Ramon",
        "Reina-Mercedes",
        "Roxas",
        "San-Agustin",
        "San-Guillermo",
        "San-Isidro",
        "San-Manuel",
        "San-Mariano",
        "San-Mateo",
        "San-Pablo",
        "Santa-Maria",
        "Santiago",
        "Santo-Tomas",
        "Tumauini",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Nueva-Viscaya") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "AlfonsoCastaneda",
        "Ambaguio",
        "Aritao",
        "Bagabag",
        "Bambang",
        "Bayombong",
        "Diadi",
        "DupaxdelNorte",
        "DupaxdelSur",
        "Kasibu",
        "Kayapa",
        "Quezon",
        "SantaFe",
        "Solano",
        "Villaverde",
      ];
      let text_array = [
        "Alfonso Castaneda",
        "Ambaguio",
        "Aritao",
        "Bagabag",
        "Bambang",
        "Bayombong",
        "Diadi",
        "Dupax del Norte",
        "Dupax del Sur",
        "Kasibu",
        "Kayapa",
        "Quezon",
        "Santa Fe",
        "Solano",
        "Villaverde",
      ];
      let value_array = [
        "Alfonso-Castaneda",
        "Ambaguio",
        "Aritao",
        "Bagabag",
        "Bambang",
        "Bayombong",
        "Diadi",
        "Dupax-del-Norte",
        "Dupax-del-Sur",
        "Kasibu",
        "Kayapa",
        "Quezon",
        "Santa-Fe",
        "Solano",
        "Villaverde",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Quirino") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Aglipay",
        "Cabarroguis",
        "Diffun",
        "Maddela",
        "Nagtipunan",
        "Sagudday",
      ];
      let text_array = [
        "Aglipay",
        "Cabarroguis",
        "Diffun",
        "Maddela",
        "Nagtipunan",
        "Sagudday",
      ];
      let value_array = [
        "Aglipay",
        "Cabarroguis",
        "Diffun",
        "Maddela",
        "Nagtipunan",
        "Sagudday",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Aurora") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Baler",
        "Casiguran",
        "Dilasag",
        "Dinalungan",
        "Dingalan",
        "Dipaculao",
        "MariaAurora",
        "SanLuis",
      ];
      let text_array = [
        "Baler",
        "Casiguran",
        "Dilasag",
        "Dinalungan",
        "Dingalan",
        "Dipaculao",
        "Maria Aurora",
        "San Luis",
      ];
      let value_array = [
        "Baler",
        "Casiguran",
        "Dilasag",
        "Dinalungan",
        "Dingalan",
        "Dipaculao",
        "Maria-Aurora",
        "San-Luis",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Bataan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Abucay",
        "Bagac",
        "Balanga",
        "Dinalupihan",
        "Hermosa",
        "Limay",
        "Mariveles",
        "Morong",
        "Orani",
        "Orion",
        "Pilar",
        "Samal",
      ];
      let text_array = [
        "Abucay",
        "Bagac",
        "Balanga",
        "Dinalupihan",
        "Hermosa",
        "Limay",
        "Mariveles",
        "Morong",
        "Orani",
        "Orion",
        "Pilar",
        "Samal",
      ];
      let value_array = [
        "Abucay",
        "Bagac",
        "Balanga",
        "Dinalupihan",
        "Hermosa",
        "Limay",
        "Mariveles",
        "Morong",
        "Orani",
        "Orion",
        "Pilar",
        "Samal",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Bulacan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Angat",
        "Balagtas",
        "Baliuag",
        "Bocaue",
        "Bulakan",
        "Bustos",
        "Calumpit",
        "DonaRemediosTrinidad",
        "Guiguinto",
        "Hagonoy",
        "Malolos",
        "Marilao",
        "Meycauayan",
        "Norzagaray",
        "Obando",
        "Pandi",
        "Paombong",
        "Plaridel",
        "Pulilan",
        "SanIldefonso",
        "SanJosedelMonte",
        "SanMiguel",
        "SanRafael",
        "SantaMaria",
      ];
      let text_array = [
        "Angat",
        "Balagtas",
        "Baliuag",
        "Bocaue",
        "Bulakan",
        "Bustos",
        "Calumpit",
        "Dona Remedios Trinidad",
        "Guiguinto",
        "Hagonoy",
        "Malolos",
        "Marilao",
        "Meycauayan",
        "Norzagaray",
        "Obando",
        "Pandi",
        "Paombong",
        "Plaridel",
        "Pulilan",
        "San Ildefonso",
        "San Jose del Monte",
        "San Miguel",
        "San Rafael",
        "Santa Maria",
      ];
      let value_array = [
        "Angat",
        "Balagtas",
        "Baliuag",
        "Bocaue",
        "Bulakan",
        "Bustos",
        "Calumpit",
        "Dona-Remedios-Trinidad",
        "Guiguinto",
        "Hagonoy",
        "Malolos",
        "Marilao",
        "Meycauayan",
        "Norzagaray",
        "Obando",
        "Pandi",
        "Paombong",
        "Plaridel",
        "Pulilan",
        "San-Ildefonso",
        "San-Jose-del-Monte",
        "San-Miguel",
        "San-Rafael",
        "Santa-Maria",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Nueva-Ecija") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Aliaga",
        "Bongabon",
        "Cabanatuan",
        "Cabiao",
        "Carranglan",
        "Cuyapo",
        "Gabaldon",
        "Gapan",
        "GeneralMamertoNatividad",
        "GeneralTinio",
        "Guimba",
        "Jaen",
        "Laur",
        "Licab",
        "Llanera",
        "Lupao",
        "Munoz",
        "Nampicuan",
        "Palayan",
        "Pantabangan",
        "Penaranda",
        "Quezon",
        "Rizal",
        "SanAntonio",
        "SanIsidro",
        "SanJose",
        "SanLeonardo",
        "SantaRosa",
        "SantoDomingo",
        "Talavera",
        "Talugtug",
        "Zaragoza",
      ];
      let text_array = [
        "Aliaga",
        "Bongabon",
        "Cabanatuan",
        "Cabiao",
        "Carranglan",
        "Cuyapo",
        "Gabaldon",
        "Gapan",
        "General Mamerto Natividad",
        "General Tinio",
        "Guimba",
        "Jaen",
        "Laur",
        "Licab",
        "Llanera",
        "Lupao",
        "Munoz",
        "Nampicuan",
        "Palayan",
        "Pantabangan",
        "Penaranda",
        "Quezon",
        "Rizal",
        "San Antonio",
        "San Isidro",
        "San Jose",
        "San Leonardo",
        "Santa Rosa",
        "Santo Domingo",
        "Talavera",
        "Talugtug",
        "Zaragoza",
      ];
      let value_array = [
        "Aliaga",
        "Bongabon",
        "Cabanatuan",
        "Cabiao",
        "Carranglan",
        "Cuyapo",
        "Gabaldon",
        "Gapan",
        "General-Mamerto-Natividad",
        "General-Tinio",
        "Guimba",
        "Jaen",
        "Laur",
        "Licab",
        "Llanera",
        "Lupao",
        "Munoz",
        "Nampicuan",
        "Palayan",
        "Pantabangan",
        "Penaranda",
        "Quezon",
        "Rizal",
        "San-Antonio",
        "San-Isidro",
        "San-Jose",
        "San-Leonardo",
        "Santa-Rosa",
        "Santo-Domingo",
        "Talavera",
        "Talugtug",
        "Zaragoza",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Pampanga") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Apalit",
        "Angeles",
        "Arayat",
        "Bacolor",
        "Candaba",
        "Floridablanca",
        "Guagua",
        "Lubao",
        "Mabalacat",
        "Macabebe",
        "Magalang",
        "Masantol",
        "Mexico",
        "Minalin",
        "Porac",
        "SanFernando",
        "SanLuis",
        "SanSimon",
        "SantaAna",
        "SantaRita",
        "SantoTomas",
        "Sasmuan",
      ];
      let text_array = [
        "Apalit",
        "Angeles",
        "Arayat",
        "Bacolor",
        "Candaba",
        "Floridablanca",
        "Guagua",
        "Lubao",
        "Mabalacat",
        "Macabebe",
        "Magalang",
        "Masantol",
        "Mexico",
        "Minalin",
        "Porac",
        "San Fernando",
        "San Luis",
        "San Simon",
        "Santa Ana",
        "Santa Rita",
        "Santo Tomas",
        "Sasmuan",
      ];
      let value_array = [
        "Apalit",
        "Angeles,",
        "Arayat",
        "Bacolor",
        "Candaba",
        "Floridablanca",
        "Guagua",
        "Lubao",
        "Mabalacat",
        "Macabebe",
        "Magalang",
        "Masantol",
        "Mexico",
        "Minalin",
        "Porac",
        "San-Fernando",
        "San-Luis",
        "San-Simon",
        "Santa-Ana",
        "Santa-Rita",
        "Santo-Tomas",
        "Sasmuan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Tarlac") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Anao",
        "Bamban",
        "Camiling",
        "Capas",
        "Concepcion",
        "Gerona",
        "LaPaz",
        "Mayantoc",
        "Moncada",
        "Paniqui",
        "Pura",
        "Ramos",
        "SanClemente",
        "SanJose",
        "SanManuel",
        "SantaIgnacia",
        "Tarlac",
        "Victoria",
      ];
      let text_array = [
        "Anao",
        "Bamban",
        "Camiling",
        "Capas",
        "Concepcion",
        "Gerona",
        "La Paz",
        "Mayantoc",
        "Moncada",
        "Paniqui",
        "Pura",
        "Ramos",
        "San Clemente",
        "San Jose",
        "San Manuel",
        "Santa Ignacia",
        "Tarlac",
        "Victoria",
      ];
      let value_array = [
        "Anao",
        "Bamban",
        "Camiling",
        "Capas",
        "Concepcion",
        "Gerona",
        "La-Paz",
        "Mayantoc",
        "Moncada",
        "Paniqui",
        "Pura",
        "Ramos",
        "San-Clemente",
        "San-Jose",
        "San-Manuel",
        "Santa-Ignacia",
        "Tarlac",
        "Victoria",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Zambales") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Botolan",
        "Cabangan",
        "Candelaria",
        "Castillejos",
        "Iba",
        "Masinloc",
        "Olongapo",
        "Palauig",
        "SanAntonio",
        "SanFelipe",
        "SanMarcelino",
        "SanNarciso",
        "SantaCruz",
        "Subic",
      ];
      let text_array = [
        "Botolan",
        "Cabangan",
        "Candelaria",
        "Castillejos",
        "Iba",
        "Masinloc",
        "Olongapo",
        "Palauig",
        "San Antonio",
        "San Felipe",
        "San Marcelino",
        "San Narciso",
        "Santa Cruz",
        "Subic",
      ];
      let value_array = [
        "Botolan",
        "Cabangan",
        "Candelaria",
        "Castillejos",
        "Iba",
        "Masinlo",
        "Olongapo",
        "Palauig",
        "San-Antonio",
        "San-Felipe",
        "San-Marcelino",
        "San-Narciso",
        "Santa-Cruz",
        "Subic",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Cavite") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alfonso",
        "Amadeo",
        "Bacoor",
        "Carmona",
        "Cavite",
        "Dasmarinas",
        "GeneralMarianoAlvares",
        "GeneralTrias",
        "Imus",
        "Indang",
        "Kawit",
        "Magallanes",
        "Maragondon",
        "Mendez",
        "Naic",
        "Noveleta",
        "Rosario",
        "Silang",
        "Tagaytay",
        "Tanza",
        "Ternate",
        "TreceMartires",
      ];
      let text_array = [
        "Alfonso",
        "Amadeo",
        "Bacoor",
        "Carmona",
        "Cavite",
        "Dasmarinas",
        "General Mariano Alvares",
        "General Trias",
        "Imus",
        "Indang",
        "Kawit",
        "Magallanes",
        "Maragondon",
        "Mendez",
        "Naic",
        "Noveleta",
        "Rosario",
        "Silang",
        "Tagaytay",
        "Tanza",
        "Ternate",
        "Trece Martires",
      ];
      let value_array = [
        "Alfonso",
        "Amadeo",
        "Bacoor",
        "Carmona",
        "Cavite",
        "Dasmarinas",
        "General-Mariano-Alvares",
        "General-Trias",
        "Imus",
        "Indang",
        "Kawit",
        "Magallanes",
        "Maragondon",
        "Mendez",
        "Naic",
        "Noveleta",
        "Rosario",
        "Silang",
        "Tagaytay",
        "Tanza",
        "Ternate",
        "Trece-Martires",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Laguna") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alaminos",
        "Bay",
        "Binan",
        "Cabuyao",
        "Calamba",
        "Calauan",
        "Cavinti",
        "Famy",
        "Kalayaan",
        "Liliw",
        "LosBanos",
        "Luisiana",
        "Lumban",
        "Mabitac",
        "Magdalena",
        "Majayjay",
        "Nagcarlan",
        "Paete",
        "Pagsanjan",
        "Pakil",
        "Pangil",
        "Pila",
        "Rizal",
        "SanPablo",
        "SanPedro",
        "SantaCruz",
        "SantaMaria",
        "SantaRosa",
        "Siniloan",
        "Victoria",
      ];
      let text_array = [
        "Alaminos",
        "Bay",
        "Binan",
        "Cabuyao",
        "Calamba",
        "Calauan",
        "Cavinti",
        "Famy",
        "Kalayaan",
        "Liliw",
        "Los Banos",
        "Luisiana",
        "Lumban",
        "Mabitac",
        "Magdalena",
        "Majayjay",
        "Nagcarlan",
        "Paete",
        "Pagsanjan",
        "Pakil",
        "Pangil",
        "Pila",
        "Rizal",
        "San Pablo",
        "San Pedro",
        "Santa Cruz",
        "Santa Maria",
        "Santa Rosa",
        "Siniloan",
        "Victoria",
      ];
      let value_array = [
        "Alaminos",
        "Bay",
        "Binan",
        "Cabuyao",
        "Calamba",
        "Calauan",
        "Cavinti",
        "Famy",
        "Kalayaan",
        "Liliw",
        "Los-Banos",
        "Luisiana",
        "Lumban",
        "Mabitac",
        "Magdalena",
        "Majayjay",
        "Nagcarlan",
        "Paete",
        "Pagsanjan",
        "Pakil",
        "Pangil",
        "Pila",
        "Rizal",
        "San-Pablo",
        "San-Pedro",
        "Santa-Cruz",
        "Santa-Maria",
        "Santa-Rosa",
        "Siniloan",
        "Victoria",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Batangas") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Agoncillo",
        "Alitagtag",
        "Balayan",
        "Balete",
        "Batangas",
        "Bauan",
        "Calaca",
        "Calatagan",
        "Cuenca",
        "Ibaan",
        "Laurel",
        "Lemery",
        "Lian",
        "Lipa",
        "Lobo",
        "Mabini",
        "Malvar",
        "Mataasnakahoy",
        "Nasugbu",
        "PadreGarcia",
        "Rosario",
        "SanJose",
        "SanJuan",
        "SanLuis",
        "SanNicolas",
        "SanPascual",
        "SantaTeresita",
        "SantoTomas",
        "Taal",
        "Talisay",
        "Tanauan",
        "Taysan",
        "Tingloy",
        "Tuy",
      ];
      let text_array = [
        "Agoncillo",
        "Alitagtag",
        "Balayan",
        "Balete",
        "Batangas",
        "Bauan",
        "Calaca",
        "Calatagan",
        "Cuenca",
        "Ibaan",
        "Laurel",
        "Lemery",
        "Lian",
        "Lipa",
        "Lobo",
        "Mabini",
        "Malvar",
        "Mataasnakahoy",
        "Nasugbu",
        "Padre Garcia",
        "Rosario",
        "San Jose",
        "San Juan",
        "San Luis",
        "San Nicolas",
        "San Pascual",
        "Santa Teresita",
        "Santo Tomas",
        "Taal",
        "Talisay",
        "Tanauan",
        "Taysan",
        "Tingloy",
        "Tuy",
      ];
      let value_array = [
        "Agoncillo",
        "Alitagtag",
        "Balayan",
        "Balete",
        "Batangas",
        "Bauan",
        "Calaca",
        "Calatagan",
        "Cuenca",
        "Ibaan",
        "Laurel",
        "Lemery",
        "Lian",
        "Lipa",
        "Lobo",
        "Mabini",
        "Malvar",
        "Mataasnakahoy",
        "Nasugbu",
        "Padre-Garcia",
        "Rosario",
        "San-Jose",
        "San-Juan",
        "San-Luis",
        "San-Nicolas",
        "San-Pascual",
        "Santa-Teresita",
        "Santo-Tomas",
        "Taal",
        "Talisay",
        "Tanauan",
        "Taysan",
        "Tingloy",
        "Tuy",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Rizal") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Angono",
        "Antipolo",
        "Baras",
        "Binangonan",
        "Cainta",
        "Cardona",
        "Jalajala",
        "Morong",
        "Pililla",
        "Rodriguez",
        "SanMateo",
        "Tanay",
        "Taytay",
        "Teresa",
      ];
      let text_array = [
        "Angono",
        "Antipolo",
        "Baras",
        "Binangonan",
        "Cainta",
        "Cardona",
        "Jalajala",
        "Morong",
        "Pililla",
        "Rodriguez",
        "San Mateo",
        "Tanay",
        "Taytay",
        "Teresa",
      ];
      let value_array = [
        "Angono",
        "Antipolo",
        "Baras",
        "Binangonan",
        "Cainta",
        "Cardona",
        "Jalajala",
        "Morong",
        "Pililla",
        "Rodriguez",
        "San-Mateo",
        "Tanay",
        "Taytay",
        "Teresa",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Quezon-Province") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Agdangan",
        "Alabat",
        "Atimonan",
        "Buenavista",
        "Burdeos",
        "Calauag",
        "Candelaria",
        "Catanauan",
        "Dolores",
        "GeneralLuna",
        "GeneralNakar",
        "Guinayangan",
        "Gumaca",
        "Infanta",
        "Jomalig",
        "Lopez",
        "Lucban",
        "Lucena",
        "Macalelon",
        "Mauban",
        "Mulanay",
        "PadreBurgos",
        "Pagbilao",
        "Panukulan",
        "Patnanungan",
        "Perez",
        "Pitogo",
        "Plaridel",
        "Polillo",
        "Quezon",
        "Real",
        "Sampaloc",
        "SanAndres",
        "SanAntonio",
        "SanFrancisco",
        "SanNarciso",
        "Sariaya",
        "Tagkawan",
        "Tayabas",
        "Tiaong",
        "Unisan",
      ];
      let text_array = [
        "Agdangan",
        "Alabat",
        "Atimonan",
        "Buenavista",
        "Burdeos",
        "Calauag",
        "Candelaria",
        "Catanauan",
        "Dolores",
        "General Luna",
        "General Nakar",
        "Guinayangan",
        "Gumaca",
        "Infanta",
        "Jomalig",
        "Lopez",
        "Lucban",
        "Lucena",
        "Macalelon",
        "Mauban",
        "Mulanay",
        "Padre Burgos",
        "Pagbilao",
        "Panukulan",
        "Patnanungan",
        "Perez",
        "Pitogo",
        "Plaridel",
        "Polillo",
        "Quezon",
        "Real",
        "Sampaloc",
        "SanAndres",
        "San Antonio",
        "San Francisco",
        "San Narciso",
        "Sariaya",
        "Tagkawan",
        "Tayabas",
        "Tiaong",
        "Unisan",
      ];
      let value_array = [
        "Agdangan",
        "Alabat",
        "Atimonan",
        "Buenavista",
        "Burdeos",
        "Calauag",
        "Candelaria",
        "Catanauan",
        "Dolores",
        "General-Luna",
        "General-Nakar",
        "Guinayangan",
        "Gumaca",
        "Infanta",
        "Jomalig",
        "Lopez",
        "Lucban",
        "Lucena",
        "Macalelon",
        "Mauban",
        "Mulanay",
        "Padre-Burgos",
        "Pagbilao",
        "Panukulan",
        "Patnanungan",
        "Perez",
        "Pitogo",
        "Plaridel",
        "Polillo",
        "Quezon",
        "Real",
        "Sampaloc",
        "San-Andres",
        "San-Antonio",
        "San-Francisco",
        "SanNarciso",
        "Sariaya",
        "Tagkawan",
        "Tayabas",
        "Tiaong",
        "Unisan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Mindoro") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "AbradeIlog",
        "Calintaan",
        "Looc",
        "Lubang",
        "Magsaysay",
        "Mamburao",
        "Paluan",
        "Rizal",
        "Sablayan",
        "SanJose",
        "SantaCruz",
        "Baco",
        "Bansud",
        "Bongabong",
        "Bulalacao",
        "Calapan",
        "Gloria",
        "Mansalay",
        "Naujan",
        "Pinamalayan",
        "Pola",
        "PuertoGalera",
        "Roxas",
        "SanTeodoro",
        "Socorro",
        "Victoria",
      ];
      let text_array = [
        "Abra de Ilog",
        "Calintaan",
        "Looc",
        "Lubang",
        "Magsaysay",
        "Mamburao",
        "Paluan",
        "Rizal",
        "Sablayan",
        "San Jose",
        "Santa Cruz",
        "Baco",
        "Bansud",
        "Bongabong",
        "Bulalacao",
        "Calapan",
        "Gloria",
        "Mansalay",
        "Naujan",
        "Pinamalayan",
        "Pola",
        "PuertoGalera",
        "Roxas",
        "SanTeodoro",
        "Socorro",
        "Victoria",
      ];
      let value_array = [
        "Abra-de-Ilog",
        "Calintaan",
        "Looc",
        "Lubang",
        "Magsaysay",
        "Mamburao",
        "Paluan",
        "Rizal",
        "Sablayan",
        "San-Jose",
        "Santa-Cruz",
        "Baco",
        "Bansud",
        "Bongabong",
        "Bulalacao",
        "Calapan",
        "Gloria",
        "Mansalay",
        "Naujan",
        "Pinamalayan",
        "Pola",
        "PuertoGalera",
        "Roxas",
        "SanTeodoro",
        "Socorro",
        "Victoria",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "marinduque") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Boac",
        "Buenavista",
        "Gasan",
        "Mogpog",
        "SantaCruz",
        "Torrijos",
      ];
      let text_array = [
        "Boac",
        "Buenavista",
        "Gasan",
        "Mogpog",
        "SantaCruz",
        "Torrijos",
      ];
      let value_array = [
        "Boac",
        "Buenavista",
        "Gasan",
        "Mogpog",
        "SantaCruz",
        "Torrijos",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Romblon") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alcantara",
        "Banton",
        "Cajidiocan",
        "Caltrava",
        "Concepcion",
        "Corcuera",
        "Ferrol",
        "Looc",
        "Magdiwang",
        "Odiongan",
        "Romblon",
        "SanAgustin",
        "SanAndres",
        "SanFernando",
        "SanJose",
        "SantaFe",
        "SantaMaria",
      ];
      let text_array = [
        "Alcantara",
        "Banton",
        "Cajidiocan",
        "Caltrava",
        "Concepcion",
        "Corcuera",
        "Ferrol",
        "Looc",
        "Magdiwang",
        "Odiongan",
        "Romblon",
        "San Agustin",
        "San Andres",
        "San Fernando",
        "San Jose",
        "Santa Fe",
        "Santa Maria",
      ];
      let value_array = [
        "Alcantara",
        "Banton",
        "Cajidiocan",
        "Caltrava",
        "Concepcion",
        "Corcuera",
        "Ferrol",
        "Looc",
        "Magdiwang",
        "Odiongan",
        "Romblon",
        "San-Agustin",
        "San-Andres",
        "San-Fernando",
        "San-Jose",
        "Santa-Fe",
        "Santa-Maria",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Palawan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Aborlan",
        "Agutaya",
        "Araceli",
        "Balabac",
        "Bataraza",
        "BrookesPoint",
        "Bursuanga",
        "Cagayancillo",
        "Coron",
        "Culion",
        "Cuyo",
        "Dumaran",
        "ElNido",
        "Kalayaan",
        "Linapacan",
        "Magsaysay",
        "Narra",
        "Quezon",
        "Rizal",
        "Roxas",
        "SanVicente",
        "SofronioEspanola",
        "Taytay",
      ];
      let text_array = [
        "Aborlan",
        "Agutaya",
        "Araceli",
        "Balabac",
        "Bataraza",
        "Brookes Point",
        "Bursuanga",
        "Cagayancillo",
        "Coron",
        "Culion",
        "Cuyo",
        "Dumaran",
        "El Nido",
        "Kalayaan",
        "Linapacan",
        "Magsaysay",
        "Narra",
        "Quezon",
        "Rizal",
        "Roxas",
        "San Vicente",
        "Sofronio Espanola",
        "Taytay",
      ];
      let value_array = [
        "Aborlan",
        "Agutaya",
        "Araceli",
        "Balabac",
        "Bataraza",
        "Brookes-Point",
        "Bursuanga",
        "Cagayancillo",
        "Coron",
        "Culion",
        "Cuyo",
        "Dumaran",
        "El-Nido",
        "Kalayaan",
        "Linapacan",
        "Magsaysay",
        "Narra",
        "Quezon",
        "Rizal",
        "Roxas",
        "San-Vicente",
        "Sofronio-Espanola",
        "Taytay",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Albay") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bacacay",
        "Camalig",
        "Daraga",
        "Guinobatan",
        "Joveliar",
        "Legazpi",
        "Libon",
        "Ligao",
        "Malilipot",
        "Malinao",
        "Manito",
        "Oas",
        "PioDuran",
        "Polangui",
        "Rapu-Rapu",
        "SantoDomingo",
        "Tabaco",
        "Tiwi",
      ];
      let text_array = [
        "Bacacay",
        "Camalig",
        "Daraga",
        "Guinobatan",
        "Joveliar",
        "Legazpi",
        "Libon",
        "Ligao",
        "Malilipot",
        "Malinao",
        "Manito",
        "Oas",
        "Pio Duran",
        "Polangui",
        "Rapu-Rapu",
        "Santo Domingo",
        "Tabaco",
        "Tiwi",
      ];
      let value_array = [
        "Bacacay",
        "Camalig",
        "Daraga",
        "Guinobatan",
        "Joveliar",
        "Legazpi",
        "Libon",
        "Ligao",
        "Malilipot",
        "Malinao",
        "Manito",
        "Oas",
        "Pio-Duran",
        "Polangui",
        "Rapu-Rapu",
        "Santo-Domingo",
        "Tabaco",
        "Tiwi",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Camarines-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Basud",
        "Capalonga",
        "Daet",
        "JosePanganiban",
        "Labo",
        "Mercedes",
        "Paracale",
        "SanLorenzoRuiz",
        "SanVicente",
        "SantaElena",
        "Talisay",
        "Vinzons",
      ];
      let text_array = [
        "Basud",
        "Capalonga",
        "Daet",
        "Jose Panganiban",
        "Labo",
        "Mercedes",
        "Paracale",
        "San Lorenzo Ruiz",
        "San Vicente",
        "Santa Elena",
        "Talisay",
        "Vinzons",
      ];
      let value_array = [
        "Basud",
        "Capalonga",
        "Daet",
        "Jose-Panganiban",
        "Labo",
        "Mercedes",
        "Paracale",
        "San-Lorenzo-Ruiz",
        "San-Vicente",
        "Santa-Elena",
        "Talisay",
        "Vinzons",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Camarines-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Baao",
        "Balatan",
        "Bato",
        "Bombon",
        "Buhi",
        "Bula",
        "Cabusao",
        "Calabanga",
        "Camaligan",
        "Canaman",
        "Caramoan",
        "DelGallego",
        "Gainza",
        "Garchitorena",
        "Goa",
        "Iriga",
        "Lagonoy",
        "Libmanan",
        "Lupi",
        "Magarao",
        "Milaor",
        "Minalabac",
        "Nabua",
        "Naga",
        "Ocampo",
        "Pamplona",
        "Pasacao",
        "Pili",
        "Presentacion",
        "Ragay",
        "Sagnay",
        "SanFernando",
        "SanJose",
        "Sipocot",
        "Siruma",
        "Tigaon",
        "Tinambac",
      ];
      let text_array = [
        "Baao",
        "Balatan",
        "Bato",
        "Bombon",
        "Buhi",
        "Bula",
        "Cabusao",
        "Calabanga",
        "Camaligan",
        "Canaman",
        "Caramoan",
        "Del Gallego",
        "Gainza",
        "Garchitorena",
        "Goa",
        "Iriga",
        "Lagonoy",
        "Libmanan",
        "Lupi",
        "Magarao",
        "Milaor",
        "Minalabac",
        "Nabua",
        "Naga",
        "Ocampo",
        "Pamplona",
        "Pasacao",
        "Pili",
        "Presentacion",
        "Ragay",
        "Sagnay",
        "San Fernando",
        "San Jose",
        "Sipocot",
        "Siruma",
        "Tigaon",
        "Tinambac",
      ];
      let value_array = [
        "Baao",
        "Balatan",
        "Bato",
        "Bombon",
        "Buhi",
        "Bula",
        "Cabusao",
        "Calabanga",
        "Camaligan",
        "Canaman",
        "Caramoan",
        "Del-Gallego",
        "Gainza",
        "Garchitorena",
        "Goa",
        "Iriga",
        "Lagonoy",
        "Libmanan",
        "Lupi",
        "Magarao",
        "Milaor",
        "Minalabac",
        "Nabua",
        "Naga",
        "Ocampo",
        "Pamplona",
        "Pasacao",
        "Pili",
        "Presentacion",
        "Ragay",
        "Sagnay",
        "San-Fernando",
        "San-Jose",
        "Sipocot",
        "Siruma",
        "Tigaon",
        "Tinambac",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Catanduanes") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bagamonoc",
        "Baras",
        "Bato",
        "Caramoran",
        "Gigmoto",
        "Pandan",
        "Panganiban",
        "SanAndres",
        "SanMiguel",
        "Viga",
        "Virac",
      ];
      let text_array = [
        "Bagamonoc",
        "Baras",
        "Bato",
        "Caramoran",
        "Gigmoto",
        "Pandan",
        "Panganiban",
        "San Andres",
        "San Miguel",
        "Viga",
        "Virac",
      ];
      let value_array = [
        "Bagamonoc",
        "Baras",
        "Bato",
        "Caramoran",
        "Gigmoto",
        "Pandan",
        "Panganiban",
        "San Andres",
        "San Miguel",
        "Viga",
        "Virac",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Masbate") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Aroroy",
        "Baleno",
        "Balud",
        "Batuan",
        "Cataingan",
        "Cawayan",
        "Claveria",
        "Dimasalang",
        "Esperanza",
        "Mandaon",
        "Masbate",
        "Milagros",
        "Mobo",
        "Monreal",
        "Palanas",
        "PioVCorpuz",
        "Placer",
        "SanFernando",
        "SanJacinto",
        "SanPascual",
        "Uson",
      ];
      let text_array = [
        "Aroroy",
        "Baleno",
        "Balud",
        "Batuan",
        "Cataingan",
        "Cawayan",
        "Claveria",
        "Dimasalang",
        "Esperanza",
        "Mandaon",
        "Masbate",
        "Milagros",
        "Mobo",
        "Monreal",
        "Palanas",
        "Pio V Corpuz",
        "Placer",
        "San Fernando",
        "San Jacinto",
        "San Pascual",
        "Uson",
      ];
      let value_array = [
        "Aroroy",
        "Baleno",
        "Balud",
        "Batuan",
        "Cataingan",
        "Cawayan",
        "Claveria",
        "Dimasalang",
        "Esperanza",
        "Mandaon",
        "Masbate",
        "Milagros",
        "Mobo",
        "Monreal",
        "Palanas",
        "Pio-V-Corpuz",
        "Placer",
        "San-Fernando",
        "San-acinto",
        "San-Pascual",
        "Uson",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Sorsogon") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Barcelona",
        "Bulan",
        "Bulusan",
        "Casiguran",
        "Castilla",
        "Donsol",
        "Gubat",
        "Irosin",
        "Juban",
        "Magallanes",
        "Matnog",
        "Pilar",
        "PrietoDiaz",
        "SantaMagdalena",
        "Sorsogon",
      ];
      let text_array = [
        "Barcelona",
        "Bulan",
        "Bulusan",
        "Casiguran",
        "Castilla",
        "Donsol",
        "Gubat",
        "Irosin",
        "Juban",
        "Magallanes",
        "Matnog",
        "Pilar",
        "Prieto Diaz",
        "Santa Magdalena",
        "Sorsogon",
      ];
      let value_array = [
        "Barcelona",
        "Bulan",
        "Bulusan",
        "Casiguran",
        "Castilla",
        "Donsol",
        "Gubat",
        "Irosin",
        "Juban",
        "Magallanes",
        "Matnog",
        "Pilar",
        "Prieto-Diaz",
        "Santa-Magdalena",
        "Sorsogon",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Aklan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Altavas",
        "Balete",
        "Banga",
        "Batan",
        "Buruanga",
        "Ibajay",
        "Kalibo",
        "Lezo",
        "Libacao",
        "Madalag",
        "Makato",
        "Malay",
        "Malinao",
        "Nabas",
        "NewWashington",
        "Numancia",
        "Tangalan",
      ];
      let text_array = [
        "Altavas",
        "Balete",
        "Banga",
        "Batan",
        "Buruanga",
        "Ibajay",
        "Kalibo",
        "Lezo",
        "Libacao",
        "Madalag",
        "Makato",
        "Malay",
        "Malinao",
        "Nabas",
        "New Washington",
        "Numancia",
        "Tangalan",
      ];
      let value_array = [
        "Altavas",
        "Balete",
        "Banga",
        "Batan",
        "Buruanga",
        "Ibajay",
        "Kalibo",
        "Lezo",
        "Libacao",
        "Madalag",
        "Makato",
        "Malay",
        "Malinao",
        "Nabas",
        "New-Washington",
        "Numancia",
        "Tangalan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Antique") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Anini-y",
        "Barbaza",
        "Belison",
        "Bugasong",
        "Caluya",
        "Culasi",
        "Hamtic",
        "Laua-an",
        "Libertad",
        "Pandan",
        "Patnongon",
        "SanJosedeBuenavista",
        "SanRemigio",
        "Sebaste",
        "Sibalom",
        "Tibiao",
        "TobiasFornier",
        "Valderrama",
      ];
      let text_array = [
        "Anini-y",
        "Barbaza",
        "Belison",
        "Bugasong",
        "Caluya",
        "Culasi",
        "Hamtic",
        "Laua-an",
        "Libertad",
        "Pandan",
        "Patnongon",
        "San Jose de Buenavista",
        "San Remigio",
        "Sebaste",
        "Sibalom",
        "Tibiao",
        "Tobias Fornier",
        "Valderrama",
      ];
      let value_array = [
        "Anini-y",
        "Barbaza",
        "Belison",
        "Bugasong",
        "Caluya",
        "Culasi",
        "Hamtic",
        "Laua-an",
        "Libertad",
        "Pandan",
        "Patnongon",
        "San-Jose-de-Buenavista",
        "San-Remigio",
        "Sebaste",
        "Sibalom",
        "Tibiao",
        "Tobias-Fornier",
        "Valderrama",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Capiz") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Cuartero",
        "Dao",
        "Dumalag",
        "Dumarao",
        "Ivisan",
        "Jamindan",
        "Maayon",
        "Mambusao",
        "Panay",
        "Panitan",
        "Pilar",
        "Ponteverda",
        "PresidentRoxas",
        "Roxas",
        "Sapian",
        "Sigma",
        "Tapaz",
      ];
      let text_array = [
        "Cuartero",
        "Dao",
        "Dumalag",
        "Dumarao",
        "Ivisan",
        "Jamindan",
        "Maayon",
        "Mambusao",
        "Panay",
        "Panitan",
        "Pilar",
        "Ponteverda",
        "President Roxas",
        "Roxas",
        "Sapian",
        "Sigma",
        "Tapaz",
      ];
      let value_array = [
        "Cuartero",
        "Dao",
        "Dumalag",
        "Dumarao",
        "Ivisan",
        "Jamindan",
        "Maayon",
        "Mambusao",
        "Panay",
        "Panitan",
        "Pilar",
        "Ponteverda",
        "President-Roxas",
        "Roxas",
        "Sapian",
        "Sigma",
        "Tapaz",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Guimaras") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Buenavista",
        "Jordan",
        "NuevaValencia",
        "SanLorenzo",
        "Sibunag",
      ];
      let text_array = [
        "Buenavista",
        "Jordan",
        "Nueva Valencia",
        "San Lorenzo",
        "Sibunag",
      ];
      let value_array = [
        "Buenavista",
        "Jordan",
        "Nueva-Valencia",
        "San-Lorenzo",
        "Sibunag",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Iloilo") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Ajuy",
        "Alimodian",
        "Anilao",
        "Badiangan",
        "Balasan",
        "Banate",
        "BarotacNuevo",
        "BarotacViejo",
        "Batad",
        "Bingawan",
        "Cabatuan",
        "Calinog",
        "Carles",
        "Concepcion",
        "Dingle",
        "Duenas",
        "Dumangas",
        "Estancia",
        "Guimbal",
        "Igbaras",
        "Iloilo",
        "Janiuay",
        "Lambunao",
        "Leganes",
        "Lemery",
        "Leon",
        "Maasin",
        "Miagao",
        "Mina",
        "NewLucena",
        "Oton",
        "Passi",
        "Pavia",
        "Pototan",
        "SanDionisio",
        "SanEnrique",
        "SanJoaquin",
        "SanMiguel",
        "SanRafael",
        "SantaBarbara",
        "Sara",
        "Tigbauan",
        "Tubungan",
        "Zarraga",
      ];
      let text_array = [
        "Ajuy",
        "Alimodian",
        "Anilao",
        "Badiangan",
        "Balasan",
        "Banate",
        "Barotac Nuevo",
        "Barotac Viejo",
        "Batad",
        "Bingawan",
        "Cabatuan",
        "Calinog",
        "Carles",
        "Concepcion",
        "Dingle",
        "Duenas",
        "Dumangas",
        "Estancia",
        "Guimbal",
        "Igbaras",
        "Iloilo",
        "Janiuay",
        "Lambunao",
        "Leganes",
        "Lemery",
        "Leon",
        "Maasin",
        "Miagao",
        "Mina",
        "New Lucena",
        "Oton",
        "Passi",
        "Pavia",
        "Pototan",
        "San Dionisio",
        "San Enrique",
        "San Joaquin",
        "San Miguel",
        "San Rafael",
        "Santa Barbara",
        "Sara",
        "Tigbauan",
        "Tubungan",
        "Zarraga",
      ];
      let value_array = [
        "Ajuy",
        "Alimodian",
        "Anilao",
        "Badiangan",
        "Balasan",
        "Banate",
        "Barotac-Nuevo",
        "Barotac-Viejo",
        "Batad",
        "Bingawan",
        "Cabatuan",
        "Calinog",
        "Carles",
        "Concepcion",
        "Dingle",
        "Duenas",
        "Dumangas",
        "Estancia",
        "Guimbal",
        "Igbaras",
        "Iloilo",
        "Janiuay",
        "Lambunao",
        "Leganes",
        "Lemery",
        "Leon",
        "Maasin",
        "Miagao",
        "Mina",
        "New-Lucena",
        "Oton",
        "Passi",
        "Pavia",
        "Pototan",
        "San-Dionisio",
        "San-Enrique",
        "San-Joaquin",
        "San-Miguel",
        "San-Rafael",
        "Santa-Barbara",
        "Sara",
        "Tigbauan",
        "Tubungan",
        "Zarraga",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Negros-Occidental") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bacolod",
        "Bago",
        "Binalbagan",
        "Cadiz",
        "Calatrava",
        "Candoni",
        "Cauayan",
        "EnriqueBMagalona",
        "Escalante",
        "Himamaylan",
        "Hinigaran",
        "Hinoba-an",
        "Ilog",
        "Isabela",
        "Kabankalan",
        "LaCarlota",
        "LaCastellana",
        "Manapla",
        "MoisesPadilla",
        "Murcia",
        "Pontevedra",
        "Pulupandan",
        "Sagay",
        "SalvadorBenedicto",
        "SanCarlos",
        "SanEnrique",
        "Silay",
        "Sipalay",
        "Talisay",
        "Toboso",
        "Valladolid",
        "Victorias",
      ];
      let text_array = [
        "Bacolod",
        "Bago",
        "Binalbagan",
        "Cadiz",
        "Calatrava",
        "Candoni",
        "Cauayan",
        "Enrique B Magalona",
        "Escalante",
        "Himamaylan",
        "Hinigaran",
        "Hinoba-an",
        "Ilog",
        "Isabela",
        "Kabankalan",
        "La Carlota",
        "La Castellana",
        "Manapla",
        "Moises Padilla",
        "Murcia",
        "Pontevedra",
        "Pulupandan",
        "Sagay",
        "Salvador Benedicto",
        "San Carlos",
        "San Enrique",
        "Silay",
        "Sipalay",
        "Talisay",
        "Toboso",
        "Valladolid",
        "Victorias",
      ];
      let value_array = [
        "Bacolod",
        "Bago",
        "Binalbagan",
        "Cadiz",
        "Calatrava",
        "Candoni",
        "Cauayan",
        "Enrique-B-Magalona",
        "Escalante",
        "Himamaylan",
        "Hinigaran",
        "Hinoba-an",
        "Ilog",
        "Isabela",
        "Kabankalan",
        "La-Carlota",
        "La-Castellana",
        "Manapla",
        "Moises-Padilla",
        "Murcia",
        "Pontevedra",
        "Pulupandan",
        "Sagay",
        "Salvador-Benedicto",
        "San-Carlos",
        "San-Enrique",
        "Silay",
        "Sipalay",
        "Talisay",
        "Toboso",
        "Valladolid",
        "Victorias",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Bohol") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Albaquerque",
        "Alicia",
        "Anda",
        "Antequera",
        "Baclayon",
        "Balilihan",
        "Batuan",
        "BienUnido",
        "Bilar",
        "Buenavista",
        "Calape",
        "Candijay",
        "Carmen",
        "Catigbian",
        "Clarin",
        "Corella",
        "Cortes",
        "Dagohoy",
        "Danao",
        "Dauis",
        "Dimiao",
        "Duero",
        "GarciaHernandez",
        "Getafe",
        "Guindulman",
        "Inabanga",
        "Jagna",
        "Lila",
        "Loay",
        "Loboc",
        "Loon",
        "Mabini",
        "Maribojoc",
        "Panglao",
        "Pilar",
        "PresidentCarlosPGarcia",
        "Sagbayan",
        "SanIsidro",
        "SanMiguel",
        "Sevilla",
        "SierraBullones",
        "Sikatuna",
        "Tagbilaran",
        "Talibon",
        "Trinidad",
        "Tubigon",
        "Ubay",
        "Valencia",
      ];
      let text_array = [
        "Albaquerque",
        "Alicia",
        "Anda",
        "Antequera",
        "Baclayon",
        "Balilihan",
        "Batuan",
        "Bien Unido",
        "Bilar",
        "Buenavista",
        "Calape",
        "Candijay",
        "Carmen",
        "Catigbian",
        "Clarin",
        "Corella",
        "Cortes",
        "Dagohoy",
        "Danao",
        "Dauis",
        "Dimiao",
        "Duero",
        "Garcia Hernandez",
        "Getafe",
        "Guindulman",
        "Inabanga",
        "Jagna",
        "Lila",
        "Loay",
        "Loboc",
        "Loon",
        "Mabini",
        "Maribojoc",
        "Panglao",
        "Pilar",
        "President Carlos P Garcia",
        "Sagbayan",
        "San Isidro",
        "San Miguel",
        "Sevilla",
        "Sierra Bullones",
        "Sikatuna",
        "Tagbilaran",
        "Talibon",
        "Trinidad",
        "Tubigon",
        "Ubay",
        "Valencia",
      ];
      let value_array = [
        "Albaquerque",
        "Alicia",
        "Anda",
        "Antequera",
        "Baclayon",
        "Balilihan",
        "Batuan",
        "Bien-Unido",
        "Bilar",
        "Buenavista",
        "Calape",
        "Candijay",
        "Carmen",
        "Catigbian",
        "Clarin",
        "Corella",
        "Cortes",
        "Dagohoy",
        "Danao",
        "Dauis",
        "Dimiao",
        "Duero",
        "Garcia-Hernandez",
        "Getafe",
        "Guindulman",
        "Inabanga",
        "Jagna",
        "Lila",
        "Loay",
        "Loboc",
        "Loon",
        "Mabini",
        "Maribojoc",
        "Panglao",
        "Pilar",
        "President-Carlos-P-Garcia",
        "Sagbayan",
        "San-Isidro",
        "San-Miguel",
        "Sevilla",
        "Sierra-Bullones",
        "Sikatuna",
        "Tagbilaran",
        "Talibon",
        "Trinidad",
        "Tubigon",
        "Ubay",
        "Valencia",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Cebu") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alcantara",
        "Alcoy",
        "Alegria",
        "Aloguinsan",
        "Argao",
        "Asturias",
        "Badian",
        "Balamban",
        "Bantayan",
        "Barili",
        "Bogo",
        "Boljoon",
        "Borbon",
        "Carcar",
        "Carmen",
        "Catmon",
        "Cebu",
        "Compostela",
        "Consolacion",
        "Cordova",
        "Daanbantayan",
        "Dalaguete",
        "Danao",
        "Dumanjug",
        "Ginatilan",
        "Lapu-Lapu",
        "Liloan",
        "Madridejos",
        "Malabuyoc",
        "Medellin",
        "Minglanilla",
        "Moalboal",
        "Naga",
        "Oslob",
        "Pilar",
        "Pinamungajan",
        "Poro",
        "Ronda",
        "Samboan",
        "SanFernando",
        "SanFrancisco",
        "SanRemigio",
        "SantaFe",
        "Santander",
        "Sibonga",
        "Sogod",
        "Tabogon",
        "Tabuelan",
        "Talisay",
        "Toledo",
        "Tuburan",
        "Tudela",
      ];
      let text_array = [
        "Alcantara",
        "Alcoy",
        "Alegria",
        "Aloguinsan",
        "Argao",
        "Asturias",
        "Badian",
        "Balamban",
        "Bantayan",
        "Barili",
        "Bogo",
        "Boljoon",
        "Borbon",
        "Carcar",
        "Carmen",
        "Catmon",
        "Cebu",
        "Compostela",
        "Consolacion",
        "Cordova",
        "Daanbantayan",
        "Dalaguete",
        "Danao",
        "Dumanjug",
        "Ginatilan",
        "Lapu-Lapu",
        "Liloan",
        "Madridejos",
        "Malabuyoc",
        "Medellin",
        "Minglanilla",
        "Moalboal",
        "Naga",
        "Oslob",
        "Pilar",
        "Pinamungajan",
        "Poro",
        "Ronda",
        "Samboan",
        "San Fernando",
        "San Francisco",
        "San Remigio",
        "Santa Fe",
        "Santander",
        "Sibonga",
        "Sogod",
        "Tabogon",
        "Tabuelan",
        "Talisay",
        "Toledo",
        "Tuburan",
        "Tudela",
      ];
      let value_array = [
        "Alcantara",
        "Alcoy",
        "Alegria",
        "Aloguinsan",
        "Argao",
        "Asturias",
        "Badian",
        "Balamban",
        "Bantayan",
        "Barili",
        "Bogo",
        "Boljoon",
        "Borbon",
        "Carcar",
        "Carmen",
        "Catmon",
        "Cebu",
        "Compostela",
        "Consolacion",
        "Cordova",
        "Daanbantayan",
        "Dalaguete",
        "Danao",
        "Dumanjug",
        "Ginatilan",
        "Lapu-Lapu",
        "Liloan",
        "Madridejos",
        "Malabuyoc",
        "Medellin",
        "Minglanilla",
        "Moalboal",
        "Naga",
        "Oslob",
        "Pilar",
        "Pinamungajan",
        "Poro",
        "Ronda",
        "Samboan",
        "San-Fernando",
        "San-Francisco",
        "San-Remigio",
        "Santa-Fe",
        "Santander",
        "Sibonga",
        "Sogod",
        "Tabogon",
        "Tabuelan",
        "Talisay",
        "Toledo",
        "Tuburan",
        "Tudela",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Negros-Oriental") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Amlan",
        "Ayungon",
        "Bacong",
        "Bais",
        "Basay",
        "Bayawan",
        "Bindoy",
        "Canlaon",
        "Dauin",
        "Dumaguete",
        "Guihulngan",
        "Jimalalud",
        "LaLibertad",
        "Mabinay",
        "Manjuyod",
        "Pamplona",
        "SanJose",
        "SantaCatelina",
        "Siaton",
        "Sibulan",
        "Tanjay",
        "Tayasan",
        "Valencia",
        "Vallehermoso",
        "Zamboanguita",
      ];
      let text_array = [
        "Amlan",
        "Ayungon",
        "Bacong",
        "Bais",
        "Basay",
        "Bayawan",
        "Bindoy",
        "Canlaon",
        "Dauin",
        "Dumaguete",
        "Guihulngan",
        "Jimalalud",
        "La Libertad",
        "Mabinay",
        "Manjuyod",
        "Pamplona",
        "San Jose",
        "Santa Catelina",
        "Siaton",
        "Sibulan",
        "Tanjay",
        "Tayasan",
        "Valencia",
        "Vallehermoso",
        "Zamboanguita",
      ];
      let value_array = [
        "Amlan",
        "Ayungon",
        "Bacong",
        "Bais",
        "Basay",
        "Bayawan",
        "Bindoy",
        "Canlaon",
        "Dauin",
        "Dumaguete",
        "Guihulngan",
        "Jimalalud",
        "La-Libertad",
        "Mabinay",
        "Manjuyod",
        "Pamplona",
        "San-Jose",
        "Santa-Catelina",
        "Siaton",
        "Sibulan",
        "Tanjay",
        "Tayasan",
        "Valencia",
        "Vallehermoso",
        "Zamboanguita",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Siquijor") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "EnriqueVillanueva",
        "Larena",
        "Lazi",
        "Maria",
        "SanJuan",
        "Siquijor",
      ];
      let text_array = [
        "Enrique Villanueva",
        "Larena",
        "Lazi",
        "Maria",
        "San Juan",
        "Siquijor",
      ];
      let value_array = [
        "Enrique-Villanueva",
        "Larena",
        "Lazi",
        "Maria",
        "San-Juan",
        "Siquijor",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Biliran") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Almeria",
        "Biliran",
        "Cabucgayan",
        "Caibiran",
        "Culaba",
        "Kawayan",
        "Maripipi",
        "Naval",
      ];
      let text_array = [
        "Almeria",
        "Biliran",
        "Cabucgayan",
        "Caibiran",
        "Culaba",
        "Kawayan",
        "Maripipi",
        "Naval",
      ];
      let value_array = [
        "Almeria",
        "Biliran",
        "Cabucgayan",
        "Caibiran",
        "Culaba",
        "Kawayan",
        "Maripipi",
        "Naval",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Eastern-Samar") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Arteche",
        "Balangiga",
        "Balangkayan",
        "Borongan",
        "Can-avid",
        "Dolores",
        "GeneralMacArthur",
        "Giporlos",
        "Guiuan",
        "Hernani",
        "Jipapad",
        "Lawaan",
        "Llorente",
        "Maslog",
        "Maydolong",
        "Mercedes",
        "Oras",
        "Quinapondan",
        "Salcedo",
        "SanJulian",
        "SanPolicarpo",
        "Sulat",
        "Taft",
      ];
      let text_array = [
        "Arteche",
        "Balangiga",
        "Balangkayan",
        "Borongan",
        "Can-avid",
        "Dolores",
        "General MacArthur",
        "Giporlos",
        "Guiuan",
        "Hernani",
        "Jipapad",
        "Lawaan",
        "Llorente",
        "Maslog",
        "Maydolong",
        "Mercedes",
        "Oras",
        "Quinapondan",
        "Salcedo",
        "San Julian",
        "San Policarpo",
        "Sulat",
        "Taft",
      ];
      let value_array = [
        "Arteche",
        "Balangiga",
        "Balangkayan",
        "Borongan",
        "Can-avid",
        "Dolores",
        "General-MacArthur",
        "Giporlos",
        "Guiuan",
        "Hernani",
        "Jipapad",
        "Lawaan",
        "Llorente",
        "Maslog",
        "Maydolong",
        "Mercedes",
        "Oras",
        "Quinapondan",
        "Salcedo",
        "San-Julian",
        "San-Policarpo",
        "Sulat",
        "Taft",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Leyte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Abuyog",
        "Alangalang",
        "Albuera",
        "Babatngon",
        "Barugo",
        "Bato",
        "Baybay",
        "Burauen",
        "Calubian",
        "Capoocan",
        "Carigara",
        "Dagami",
        "Dulag",
        "Hilongos",
        "Hindang",
        "Inopacan",
        "Isabel",
        "Jaro",
        "Javier",
        "Julita",
        "Kananga",
        "LaPaz",
        "Leyte",
        "MacArthur",
        "Mahaplag",
        "Matag-ob",
        "Matalom",
        "Mayorga",
        "Merida",
        "Ormoc",
        "Palo",
        "Palompon",
        "Pastrana",
        "SanIsidro",
        "SanMiguel",
        "SantaFe",
        "Tabango",
        "Tabontabon",
        "Tanauan",
        "Tolosa",
        "Tunga",
        "Villaba",
      ];
      let text_array = [
        "Abuyog",
        "Alangalang",
        "Albuera",
        "Babatngon",
        "Barugo",
        "Bato",
        "Baybay",
        "Burauen",
        "Calubian",
        "Capoocan",
        "Carigara",
        "Dagami",
        "Dulag",
        "Hilongos",
        "Hindang",
        "Inopacan",
        "Isabel",
        "Jaro",
        "Javier",
        "Julita",
        "Kananga",
        "LaPaz",
        "Leyte",
        "MacArthur",
        "Mahaplag",
        "Matag-ob",
        "Matalom",
        "Mayorga",
        "Merida",
        "Ormoc",
        "Palo",
        "Palompon",
        "Pastrana",
        "San Isidro",
        "San Miguel",
        "Santa Fe",
        "Tabango",
        "Tabontabon",
        "Tanauan",
        "Tolosa",
        "Tunga",
        "Villaba",
      ];
      let value_array = [
        "Abuyog",
        "Alangalang",
        "Albuera",
        "Babatngon",
        "Barugo",
        "Bato",
        "Baybay",
        "Burauen",
        "Calubian",
        "Capoocan",
        "Carigara",
        "Dagami",
        "Dulag",
        "Hilongos",
        "Hindang",
        "Inopacan",
        "Isabel",
        "Jaro",
        "Javier",
        "Julita",
        "Kananga",
        "LaPaz",
        "Leyte",
        "MacArthur",
        "Mahaplag",
        "Matag-ob",
        "Matalom",
        "Mayorga",
        "Merida",
        "Ormoc",
        "Palo",
        "Palompon",
        "Pastrana",
        "San-Isidro",
        "San-Miguel",
        "Santa-Fe",
        "Tabango",
        "Tabontabon",
        "Tanauan",
        "Tolosa",
        "Tunga",
        "Villaba",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Northern-Samar") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Allen",
        "Biri",
        "Bobon",
        "Capul",
        "Catarman",
        "Catubig",
        "Gamay",
        "Laoang",
        "Lapinig",
        "LasNavas",
        "Lavezares",
        "LopedeVega",
        "Mapanas",
        "Mondragon",
        "Palagan",
        "Pambujan",
        "Rosario",
        "SanAntonio",
        "SanIsidro",
        "SanJose",
        "SanRoque",
        "SanVicente",
        "SilvinoLobos",
        "Victoria",
      ];
      let text_array = [
        "Allen",
        "Biri",
        "Bobon",
        "Capul",
        "Catarman",
        "Catubig",
        "Gamay",
        "Laoang",
        "Lapinig",
        "Las Navas",
        "Lavezares",
        "Lope de Vega",
        "Mapanas",
        "Mondragon",
        "Palagan",
        "Pambujan",
        "Rosario",
        "San Antonio",
        "San Isidro",
        "San Jose",
        "San Roque",
        "San Vicente",
        "Silvino Lobos",
        "Victoria",
      ];
      let value_array = [
        "Allen",
        "Biri",
        "Bobon",
        "Capul",
        "Catarman",
        "Catubig",
        "Gamay",
        "Laoang",
        "Lapinig",
        "Las-Navas",
        "Lavezares",
        "Lope-de-Vega",
        "Mapanas",
        "Mondragon",
        "Palagan",
        "Pambujan",
        "Rosario",
        "San-Antonio",
        "San-Isidro",
        "San-Jose",
        "San-Roque",
        "San-Vicente",
        "Silvino-Lobos",
        "Victoria",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Samar") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Almagro",
        "Basey",
        "Calbayog",
        "Calbiga",
        "Catbalogan",
        "Daram",
        "Gandara",
        "Hinabangan",
        "Jiabong",
        "Marabut",
        "Matuguinao",
        "Motiong",
        "Pagsanhan",
        "Paranas",
        "Pinabacdao",
        "SanJorge",
        "SanJosedeBuan",
        "SanSebastian",
        "SantaMargarita",
        "SantaRita",
        "SantoNino",
        "Tagapul-an",
        "Talalora",
        "Tarangan",
      ];
      let text_array = [
        "Almagro",
        "Basey",
        "Calbayog",
        "Calbiga",
        "Catbalogan",
        "Daram",
        "Gandara",
        "Hinabangan",
        "Jiabong",
        "Marabut",
        "Matuguinao",
        "Motiong",
        "Pagsanhan",
        "Paranas",
        "Pinabacdao",
        "San Jorge",
        "San Jose de Buan",
        "San Sebastian",
        "Santa Margarita",
        "Santa Rita",
        "Santo Nino",
        "Tagapul-an",
        "Talalora",
        "Tarangan",
      ];
      let value_array = [
        "Almagro",
        "Basey",
        "Calbayog",
        "Calbiga",
        "Catbalogan",
        "Daram",
        "Gandara",
        "Hinabangan",
        "Jiabong",
        "Marabut",
        "Matuguinao",
        "Motiong",
        "Pagsanhan",
        "Paranas",
        "Pinabacdao",
        "SanJorge",
        "SanJosedeBuan",
        "SanSebastian",
        "SantaMargarita",
        "SantaRita",
        "SantoNino",
        "Tagapul-an",
        "Talalora",
        "Tarangan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Southern-Leyte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Anahawan",
        "Bontoc",
        "Hinunangan",
        "Hinundayan",
        "Libagon",
        "Liloan",
        "Limasawa",
        "Maasin",
        "Macrohon",
        "Malitbog",
        "PadreBurgos",
        "Pintuyan",
        "SaintBernard",
        "SanFrancisco",
        "SanJuan",
        "SanRicardo",
        "Silago",
        "Sogod",
        "TomasOppus",
      ];
      let text_array = [
        "Anahawan",
        "Bontoc",
        "Hinunangan",
        "Hinundayan",
        "Libagon",
        "Liloan",
        "Limasawa",
        "Maasin",
        "Macrohon",
        "Malitbog",
        "PadreBurgos",
        "Pintuyan",
        "SaintBernard",
        "SanFrancisco",
        "SanJuan",
        "SanRicardo",
        "Silago",
        "Sogod",
        "TomasOppus",
      ];
      let value_array = [
        "Anahawan",
        "Bontoc",
        "Hinunangan",
        "Hinundayan",
        "Libagon",
        "Liloan",
        "Limasawa",
        "Maasin",
        "Macrohon",
        "Malitbog",
        "PadreBurgos",
        "Pintuyan",
        "SaintBernard",
        "SanFrancisco",
        "SanJuan",
        "SanRicardo",
        "Silago",
        "Sogod",
        "TomasOppus",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Zamboanga-del-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Isabela",
        "Baliguian",
        "Dapitan",
        "Dipolog",
        "Godod",
        "Gutalac",
        "JoseDalman",
        "Kalawit",
        "Katipunan",
        "LaLibertad",
        "Labason",
        "LeonBPostigo",
        "Liloy",
        "Manukan",
        "Mutia",
        "Pinan",
        "Polanco",
        "PresidentManuelARoxas",
        "Rizal",
        "Salug",
        "SergioOsmenaSr",
        "Siayan",
        "Sibuco",
        "Sibutad",
        "Sindangan",
        "Siocon",
        "Sirawai",
        "Tampilisan",
      ];
      let text_array = [
        "Isabela",
        "Baliguian",
        "Dapitan",
        "Dipolog",
        "Godod",
        "Gutalac",
        "Jose Dalman",
        "Kalawit",
        "Katipunan",
        "La Libertad",
        "Labason",
        "Leon B Postigo",
        "Liloy",
        "Manukan",
        "Mutia",
        "Pinan",
        "Polanco",
        "President Manuel A Roxas",
        "Rizal",
        "Salug",
        "Sergio Osmena Sr",
        "Siayan",
        "Sibuco",
        "Sibutad",
        "Sindangan",
        "Siocon",
        "Sirawai",
        "Tampilisan",
      ];
      let value_array = [
        "Isabela",
        "Baliguian",
        "Dapitan",
        "Dipolog",
        "Godod",
        "Gutalac",
        "Jose-Dalman",
        "Kalawit",
        "Katipunan",
        "La-Libertad",
        "Labason",
        "Leon-B-Postigo",
        "Liloy",
        "Manukan",
        "Mutia",
        "Pinan",
        "Polanco",
        "President-Manuel-A-Roxas",
        "Rizal",
        "Salug",
        "Sergio-Osmena-Sr",
        "Siayan",
        "Sibuco",
        "Sibutad",
        "Sindangan",
        "Siocon",
        "Sirawai",
        "Tampilisan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Zamboanga-del-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Isabela",
        "Aurora",
        "Bayog",
        "Dimataling",
        "Dinas",
        "Dumalinao",
        "Dumingag",
        "Guipos",
        "Josefina",
        "Kumalarang",
        "Labangan",
        "Lakewood",
        "Lapuyan",
        "Mahayag",
        "Margosatubig",
        "Midsalip",
        "Molave",
        "Pagadian",
        "Pitogo",
        "RamonMagsaysay",
        "SanMiguel",
        "SanPablo",
        "Sominot",
        "Tabina",
        "Tambulig",
        "Tigbao",
        "Tukuran",
        "VincenzoASagun",
      ];
      let text_array = [
        "Isabela",
        "Aurora",
        "Bayog",
        "Dimataling",
        "Dinas",
        "Dumalinao",
        "Dumingag",
        "Guipos",
        "Josefina",
        "Kumalarang",
        "Labangan",
        "Lakewood",
        "Lapuyan",
        "Mahayag",
        "Margosatubig",
        "Midsalip",
        "Molave",
        "Pagadian",
        "Pitogo",
        "Ramon Magsaysay",
        "San Miguel",
        "San Pablo",
        "Sominot",
        "Tabina",
        "Tambulig",
        "Tigbao",
        "Tukuran",
        "Vincenzo A Sagun",
      ];
      let value_array = [
        "Isabela",
        "Aurora",
        "Bayog",
        "Dimataling",
        "Dinas",
        "Dumalinao",
        "Dumingag",
        "Guipos",
        "Josefina",
        "Kumalarang",
        "Labangan",
        "Lakewood",
        "Lapuyan",
        "Mahayag",
        "Margosatubig",
        "Midsalip",
        "Molave",
        "Pagadian",
        "Pitogo",
        "Ramon-Magsaysay",
        "San-Miguel",
        "San-Pablo",
        "Sominot",
        "Tabina",
        "Tambulig",
        "Tigbao",
        "Tukuran",
        "Vincenzo-A-Sagun",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Zamboanga-Sibugay") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Isabela",
        "Alicia",
        "Buug",
        "Diplahan",
        "Imelda",
        "Ipil",
        "Kabasalan",
        "Mabuhay",
        "Malangas",
        "Naga",
        "Olutanga",
        "Payao",
        "RosellerLim",
        "Siay",
        "Talusan",
        "Titay",
        "Tungawan",
      ];
      let text_array = [
        "Isabela",
        "Alicia",
        "Buug",
        "Diplahan",
        "Imelda",
        "Ipil",
        "Kabasalan",
        "Mabuhay",
        "Malangas",
        "Naga",
        "Olutanga",
        "Payao",
        "Roseller Lim",
        "Siay",
        "Talusan",
        "Titay",
        "Tungawan",
      ];
      let value_array = [
        "Isabela",
        "Alicia",
        "Buug",
        "Diplahan",
        "Imelda",
        "Ipil",
        "Kabasalan",
        "Mabuhay",
        "Malangas",
        "Naga",
        "Olutanga",
        "Payao",
        "Roseller-Lim",
        "Siay",
        "Talusan",
        "Titay",
        "Tungawan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Misamis-Oriental") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "CagayandeOro",
        "Alujibid",
        "Balingasag",
        "Balingoan",
        "Binuangan",
        "Claveria",
        "ElSalvador",
        "Gingoog",
        "Gitagum",
        "Initao",
        "Jasaan",
        "Kinoguitan",
        "Lagonglong",
        "Laguindingan",
        "Libertad",
        "Lugait",
        "Magsaysay",
        "Manticao",
        "Medina",
        "Naawan",
        "Opol",
        "Salay",
        "Sugbongcogon",
        "Tagoloan",
        "Talisayan",
        "Villanueva",
      ];
      let text_array = [
        "Cagayan de Oro",
        "Alujibid",
        "Balingasag",
        "Balingoan",
        "Binuangan",
        "Claveria",
        "El Salvador",
        "Gingoog",
        "Gitagum",
        "Initao",
        "Jasaan",
        "Kinoguitan",
        "Lagonglong",
        "Laguindingan",
        "Libertad",
        "Lugait",
        "Magsaysay",
        "Manticao",
        "Medina",
        "Naawan",
        "Opol",
        "Salay",
        "Sugbongcogon",
        "Tagoloan",
        "Talisayan",
        "Villanueva",
      ];
      let value_array = [
        "Cagayan-de-Oro",
        "Alujibid",
        "Balingasag",
        "Balingoan",
        "Binuangan",
        "Claveria",
        "El-Salvador",
        "Gingoog",
        "Gitagum",
        "Initao",
        "Jasaan",
        "Kinoguitan",
        "Lagonglong",
        "Laguindingan",
        "Libertad",
        "Lugait",
        "Magsaysay",
        "Manticao",
        "Medina",
        "Naawan",
        "Opol",
        "Salay",
        "Sugbongcogon",
        "Tagoloan",
        "Talisayan",
        "Villanueva",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Lanao-del-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Iligan",
        "Bacolod",
        "Baloi",
        "Baroy",
        "Kapatagan",
        "Kauswagan",
        "Kolambugan",
        "Lala",
        "Linamon",
        "Magsaysay",
        "Maigo",
        "Matungao",
        "Munai",
        "Nunungan",
        "PantaoRagat",
        "Pantar",
        "PoonaPiagapo",
        "Salvador",
        "Sapad",
        "SultanNagaDimaporo",
        "Tagoloan",
        "Tangcal",
        "Tubod",
      ];
      let text_array = [
        "Iligan",
        "Bacolod",
        "Baloi",
        "Baroy",
        "Kapatagan",
        "Kauswagan",
        "Kolambugan",
        "Lala",
        "Linamon",
        "Magsaysay",
        "Maigo",
        "Matungao",
        "Munai",
        "Nunungan",
        "Pantao Ragat",
        "Pantar",
        "Poona Piagapo",
        "Salvador",
        "Sapad",
        "Sultan Naga Dimaporo",
        "Tagoloan",
        "Tangcal",
        "Tubod",
      ];
      let value_array = [
        "Iligan",
        "Bacolod",
        "Baloi",
        "Baroy",
        "Kapatagan",
        "Kauswagan",
        "Kolambugan",
        "Lala",
        "Linamon",
        "Magsaysay",
        "Maigo",
        "Matungao",
        "Munai",
        "Nunungan",
        "Pantao-Ragat",
        "Pantar",
        "Poona-Piagapo",
        "Salvador",
        "Sapad",
        "Sultan-Naga-Dimaporo",
        "Tagoloan",
        "Tangcal",
        "Tubod",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Misamis-Occidental") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Aloran",
        "Baliangao",
        "Bonifacio",
        "Calamba",
        "Clarin",
        "Concepcion",
        "DonVictorianoChiongbian",
        "Jimenez",
        "LopezJaena",
        "Oroquieta",
        "Ozamiz",
        "Panaon",
        "Plaridel",
        "SapangDalaga",
        "Sinacaban",
        "Tangub",
        "Tudela",
      ];
      let text_array = [
        "Aloran",
        "Baliangao",
        "Bonifacio",
        "Calamba",
        "Clarin",
        "Concepcion",
        "Don Victoriano Chiongbian",
        "Jimenez",
        "Lopez Jaena",
        "Oroquieta",
        "Ozamiz",
        "Panaon",
        "Plaridel",
        "Sapang Dalaga",
        "Sinacaban",
        "Tangub",
        "Tudela",
      ];
      let value_array = [
        "Aloran",
        "Baliangao",
        "Bonifacio",
        "Calamba",
        "Clarin",
        "Concepcion",
        "Don-Victoriano-Chiongbian",
        "Jimenez",
        "Lopez-Jaena",
        "Oroquieta",
        "Ozamiz",
        "Panaon",
        "Plaridel",
        "Sapang-Dalaga",
        "Sinacaban",
        "Tangub",
        "Tudela",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Camiguin") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Catarman",
        "Guinsiliban",
        "Mahinog",
        "Mambajao",
        "Sagay",
      ];
      let text_array = [
        "Catarman",
        "Guinsiliban",
        "Mahinog",
        "Mambajao",
        "Sagay",
      ];
      let value_array = [
        "Catarman",
        "Guinsiliban",
        "Mahinog",
        "Mambajao",
        "Sagay",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Bukidnon") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Baungon",
        "Cabanglasan",
        "Damulog",
        "Dangcagan",
        "DonCarlos",
        "Impasugong",
        "Kadingilan",
        "Kalilangan",
        "Kibawe",
        "Kitaotao",
        "Lantapan",
        "Libona",
        "Malaybalay",
        "Malitbog",
        "ManoloFortich",
        "Maramag",
        "Pangantucan",
        "Quezon",
        "SanFernando",
        "Sumilao",
        "Talakag",
        "Valencia",
      ];
      let text_array = [
        "Baungon",
        "Cabanglasan",
        "Damulog",
        "Dangcagan",
        "Don Carlos",
        "Impasugong",
        "Kadingilan",
        "Kalilangan",
        "Kibawe",
        "Kitaotao",
        "Lantapan",
        "Libona",
        "Malaybalay",
        "Malitbog",
        "Manolo Fortich",
        "Maramag",
        "Pangantucan",
        "Quezon",
        "San Fernando",
        "Sumilao",
        "Talakag",
        "Valencia",
      ];
      let value_array = [
        "Baungon",
        "Cabanglasan",
        "Damulog",
        "Dangcagan",
        "Don-Carlos",
        "Impasugong",
        "Kadingilan",
        "Kalilangan",
        "Kibawe",
        "Kitaotao",
        "Lantapan",
        "Libona",
        "Malaybalay",
        "Malitbog",
        "Manolo-Fortich",
        "Maramag",
        "Pangantucan",
        "Quezon",
        "San-Fernando",
        "Sumilao",
        "Talakag",
        "Valencia",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Davao-del-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Davao",
        "Bansalan",
        "Digos",
        "Hagonoy",
        "Kiblawan",
        "Magsaysay",
        "Malalag",
        "Matanao",
        "Padada",
        "SantaCruz",
        "Sulop",
      ];
      let text_array = [
        "Davao",
        "Bansalan",
        "Digos",
        "Hagonoy",
        "Kiblawan",
        "Magsaysay",
        "Malalag",
        "Matanao",
        "Padada",
        "Santa Cruz",
        "Sulop",
      ];
      let value_array = [
        "Davao",
        "Bansalan",
        "Digos",
        "Hagonoy",
        "Kiblawan",
        "Magsaysay",
        "Malalag",
        "Matanao",
        "Padada",
        "Santa-Cruz",
        "Sulop",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Davao-de-Oro") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Compostela",
        "Laak",
        "Mabini",
        "Maco",
        "Maragusan",
        "Mawab",
        "Monkayo",
        "Montevista",
        "Nabunturan",
        "NewBataan",
        "Pantukan",
      ];
      let text_array = [
        "Compostela",
        "Laak",
        "Mabini",
        "Maco",
        "Maragusan",
        "Mawab",
        "Monkayo",
        "Montevista",
        "Nabunturan",
        "New Bataan",
        "Pantukan",
      ];
      let value_array = [
        "Compostela",
        "Laak",
        "Mabini",
        "Maco",
        "Maragusan",
        "Mawab",
        "Monkayo",
        "Montevista",
        "Nabunturan",
        "New-Bataan",
        "Pantukan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Davao-del-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Asuncion",
        "BraulioEDujali",
        "Carmen",
        "Kapalong",
        "NewCorella",
        "Panabo",
        "Samal",
        "SanIsidro",
        "SantoTomas",
        "Tagum",
        "Talaingod",
      ];
      let text_array = [
        "Asuncion",
        "Braulio E Dujali",
        "Carmen",
        "Kapalong",
        "New Corella",
        "Panabo",
        "Samal",
        "San Isidro",
        "Santo Tomas",
        "Tagum",
        "Talaingod",
      ];
      let value_array = [
        "Asuncion",
        "Braulio-E-Dujali",
        "Carmen",
        "Kapalong",
        "New-Corella",
        "Panabo",
        "Samal",
        "San-Isidro",
        "Santo-Tomas",
        "Tagum",
        "Talaingod",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Davao-Occidental") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "DonMarcelino",
        "JoseAbadSantos",
        "Malita",
        "SantaMaria",
        "Sarangani",
      ];
      let text_array = [
        "Don Marcelino",
        "Jose Abad Santos",
        "Malita",
        "Santa Maria",
        "Sarangani",
      ];
      let value_array = [
        "Don-Marcelino",
        "Jose-Abad-Santos",
        "Malita",
        "Santa-Maria",
        "Sarangani",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Davao-Oriental") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Baganga",
        "Banaybanay",
        "Boston",
        "Caraga",
        "Cateel",
        "GovernorGeneroso",
        "Lupon",
        "Manay",
        "Mati",
        "SanIsidro",
        "Tarragona",
      ];
      let text_array = [
        "Baganga",
        "Banaybanay",
        "Boston",
        "Caraga",
        "Cateel",
        "Governor Generoso",
        "Lupon",
        "Manay",
        "Mati",
        "San Isidro",
        "Tarragona",
      ];
      let value_array = [
        "Baganga",
        "Banaybanay",
        "Boston",
        "Caraga",
        "Cateel",
        "Governor-Generoso",
        "Lupon",
        "Manay",
        "Mati",
        "San-Isidro",
        "Tarragona",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Cotabato") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Cotabato",
        "Alamada",
        "Aleosan",
        "Antipas",
        "Arakan",
        "Banisilan",
        "Carmen",
        "Kabacan",
        "Kidapawan",
        "Libungan",
        "Magpet",
        "Makilala",
        "Matalam",
        "Midsayap",
        "Mlang",
        "Pigcawayan",
        "Pikit",
        "PresidentRoxas",
        "Tulunan",
      ];
      let text_array = [
        "Cotabato",
        "Alamada",
        "Aleosan",
        "Antipas",
        "Arakan",
        "Banisilan",
        "Carmen",
        "Kabacan",
        "Kidapawan",
        "Libungan",
        "Magpet",
        "Makilala",
        "Matalam",
        "Midsayap",
        "Mlang",
        "Pigcawayan",
        "Pikit",
        "President Roxas",
        "Tulunan",
      ];
      let value_array = [
        "Cotabato",
        "Alamada",
        "Aleosan",
        "Antipas",
        "Arakan",
        "Banisilan",
        "Carmen",
        "Kabacan",
        "Kidapawan",
        "Libungan",
        "Magpet",
        "Makilala",
        "Matalam",
        "Midsayap",
        "Mlang",
        "Pigcawayan",
        "Pikit",
        "President-Roxas",
        "Tulunan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "South-Cotabato") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "GeneralSantos",
        "Banga",
        "Koronadal",
        "LakeSebu",
        "Norala",
        "Polomolok",
        "SantoNino",
        "Surallah",
        "Tampakan",
        "Tantangan",
        "Tboli",
        "Tupi",
      ];
      let text_array = [
        "General Santos",
        "Banga",
        "Koronadal",
        "Lake Sebu",
        "Norala",
        "Polomolok",
        "Santo Nino",
        "Surallah",
        "Tampakan",
        "Tantangan",
        "Tboli",
        "Tupi",
      ];
      let value_array = [
        "General-Santos",
        "Banga",
        "Koronadal",
        "Lake-Sebu",
        "Norala",
        "Polomolok",
        "Santo-Nino",
        "Surallah",
        "Tampakan",
        "Tantangan",
        "Tboli",
        "Tupi",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Sarangani") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alabel",
        "Glan",
        "Kiamba",
        "Maasim",
        "Maitum",
        "Malapatan",
        "Malungon",
      ];
      let text_array = [
        "Alabel",
        "Glan",
        "Kiamba",
        "Maasim",
        "Maitum",
        "Malapatan",
        "Malungon",
      ];
      let value_array = [
        "Alabel",
        "Glan",
        "Kiamba",
        "Maasim",
        "Maitum",
        "Malapatan",
        "Malungon",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Sultan-Kudarat") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bagumbayan",
        "Columbio",
        "Esperanza",
        "Isulan",
        "Kalamansig",
        "Lambayong",
        "Lebak",
        "Lutayan",
        "Palimbang",
        "PresidentQuirino",
        "SenatorNinoyAquino",
        "Tacurong",
      ];
      let text_array = [
        "Bagumbayan",
        "Columbio",
        "Esperanza",
        "Isulan",
        "Kalamansig",
        "Lambayong",
        "Lebak",
        "Lutayan",
        "Palimbang",
        "President Quirino",
        "Senator Ninoy Aquino",
        "Tacurong",
      ];
      let value_array = [
        "Bagumbayan",
        "Columbio",
        "Esperanza",
        "Isulan",
        "Kalamansig",
        "Lambayong",
        "Lebak",
        "Lutayan",
        "Palimbang",
        "President-Quirino",
        "Senator-Ninoy-Aquino",
        "Tacurong",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Agusan-del-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Butuan",
        "Buenavista",
        "Cabadbaran",
        "Carmen",
        "Jabonga",
        "Kitcharao",
        "LasNieves",
        "Magallanes",
        "Nasipit",
        "RemediosTRomualdez",
        "Santiago",
        "Tubay",
      ];
      let text_array = [
        "Butuan",
        "Buenavista",
        "Cabadbaran",
        "Carmen",
        "Jabonga",
        "Kitcharao",
        "Las Nieves",
        "Magallanes",
        "Nasipit",
        "Remedios T Romualdez",
        "Santiago",
        "Tubay",
      ];
      let value_array = [
        "Butuan",
        "Buenavista",
        "Cabadbaran",
        "Carmen",
        "Jabonga",
        "Kitcharao",
        "Las-Nieves",
        "Magallanes",
        "Nasipit",
        "Remedios-T-Romualdez",
        "Santiago",
        "Tubay",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Agusan-del-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bayugan",
        "Bunawan",
        "Esperanza",
        "LaPaz",
        "Loreto",
        "Prosperidad",
        "Rosario",
        "SanFrancisco",
        "SanLuis",
        "SantaJosefa",
        "Sibagat",
        "Talacogon",
        "Trento",
        "Veruela",
      ];
      let text_array = [
        "Bayugan",
        "Bunawan",
        "Esperanza",
        "La Paz",
        "Loreto",
        "Prosperidad",
        "Rosario",
        "San Francisco",
        "San Luis",
        "Santa Josefa",
        "Sibagat",
        "Talacogon",
        "Trento",
        "Veruela",
      ];
      let value_array = [
        "Bayugan",
        "Bunawan",
        "Esperanza",
        "LaPaz",
        "Loreto",
        "Prosperidad",
        "Rosario",
        "San-Francisco",
        "San-Luis",
        "Santa-Josefa",
        "Sibagat",
        "Talacogon",
        "Trento",
        "Veruela",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Dinagat-Island") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Basilisa",
        "Cagdianao",
        "Dinagat",
        "Libjo",
        "Loreto",
        "SanJose",
        "Tubajon",
      ];
      let text_array = [
        "Basilisa",
        "Cagdianao",
        "Dinagat",
        "Libjo",
        "Loreto",
        "SanJose",
        "Tubajon",
      ];
      let value_array = [
        "Basilisa",
        "Cagdianao",
        "Dinagat",
        "Libjo",
        "Loreto",
        "SanJose",
        "Tubajon",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Surigao-del-Norte") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Alegria",
        "Bacuag",
        "Burgos",
        "Claver",
        "Dapa",
        "DelCarmen",
        "GeneralLuna",
        "Gigaquit",
        "Mainit",
        "Malimono",
        "Pilar",
        "Placer",
        "SanBenito",
        "SanFrancisco",
        "SanIsidro",
        "SantaMonica",
        "Sison",
        "Socorro",
        "Surigao",
        "Tagana-an",
        "Tubod",
      ];
      let text_array = [
        "Alegria",
        "Bacuag",
        "Burgos",
        "Claver",
        "Dapa",
        "Del Carmen",
        "General Luna",
        "Gigaquit",
        "Mainit",
        "Malimono",
        "Pilar",
        "Placer",
        "San Benito",
        "San Francisco",
        "San Isidro",
        "Santa Monica",
        "Sison",
        "Socorro",
        "Surigao",
        "Tagana-an",
        "Tubod",
      ];
      let value_array = [
        "Alegria",
        "Bacuag",
        "Burgos",
        "Claver",
        "Dapa",
        "Del-Carmen",
        "General-Luna",
        "Gigaquit",
        "Mainit",
        "Malimono",
        "Pilar",
        "Placer",
        "San-Benito",
        "San-Francisco",
        "San-Isidro",
        "Santa-Monica",
        "Sison",
        "Socorro",
        "Surigao",
        "Tagana-an",
        "Tubod",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Surigao-del-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Barobo",
        "Bayabas",
        "Bislig",
        "Cagwait",
        "Cantilan",
        "Carmen",
        "Carrascal",
        "Cortes",
        "Hinatuan",
        "Lanuza",
        "Lianga",
        "Lingig",
        "Madrid",
        "Marihatag",
        "SanAgustin",
        "SanMiguel",
        "Tagbina",
        "Tago",
        "Tandag",
      ];
      let text_array = [
        "Barobo",
        "Bayabas",
        "Bislig",
        "Cagwait",
        "Cantilan",
        "Carmen",
        "Carrascal",
        "Cortes",
        "Hinatuan",
        "Lanuza",
        "Lianga",
        "Lingig",
        "Madrid",
        "Marihatag",
        "San Agustin",
        "San Miguel",
        "Tagbina",
        "Tago",
        "Tandag",
      ];
      let value_array = [
        "Barobo",
        "Bayabas",
        "Bislig",
        "Cagwait",
        "Cantilan",
        "Carmen",
        "Carrascal",
        "Cortes",
        "Hinatuan",
        "Lanuza",
        "Lianga",
        "Lingig",
        "Madrid",
        "Marihatag",
        "San-Agustin",
        "San-Miguel",
        "Tagbina",
        "Tago",
        "Tandag",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Basilan") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Akbar",
        "Al-Barka",
        "HadjiMohammadAjul",
        "Isabela",
        "Lamitan",
        "Lantawan",
        "Maluso",
        "Sumisip",
        "Tabuan-Lasa",
        "Tipo-Tipo",
        "Tuburan",
        "UngkayaPukan",
      ];
      let text_array = [
        "Akbar",
        "Al-Barka",
        "Hadji Mohammad Ajul",
        "Isabela",
        "Lamitan",
        "Lantawan",
        "Maluso",
        "Sumisip",
        "Tabuan-Lasa",
        "Tipo-Tipo",
        "Tuburan",
        "Ungkaya Pukan",
      ];
      let value_array = [
        "Akbar",
        "Al-Barka",
        "Hadji Mohammad Ajul",
        "Isabela",
        "Lamitan",
        "Lantawan",
        "Maluso",
        "Sumisip",
        "Tabuan-Lasa",
        "Tipo-Tipo",
        "Tuburan",
        "Ungkaya Pukan",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Lanao-del-Sur") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "AmaiManabilang",
        "Bacolod-Kalawi",
        "Balabagan",
        "Balindong",
        "Bayang",
        "Binidayan",
        "Buadiposo-Buntong",
        "Bubong",
        "Butig",
        "Calanogas",
        "Ditsaan-Ramain",
        "Ganassi",
        "Kapai",
        "Kapatagan",
        "Lumba-Bayabao",
        "Lumbaca-Unayan",
        "Lumbatan",
        "Lumbayanague",
        "Madalum",
        "Madamba",
        "Maguing",
        "Malabang",
        "Marantao",
        "Marawi",
        "Marogong",
        "Masiu",
        "Mulondo",
        "Pagayawan",
        "Piagapo",
        "Picong",
        "PoonaBayabao",
        "Pualas",
        "Saguiaran",
        "SultanDumalodong",
        "TagaoloanII",
        "Tamparan",
        "Taraka",
        "Tubaran",
        "Tugaya",
        "Wao",
      ];
      let text_array = [
        "Amai Manabilang",
        "Bacolod-Kalawi",
        "Balabagan",
        "Balindong",
        "Bayang",
        "Binidayan",
        "Buadiposo-Buntong",
        "Bubong",
        "Butig",
        "Calanogas",
        "Ditsaan-Ramain",
        "Ganassi",
        "Kapai",
        "Kapatagan",
        "Lumba-Bayabao",
        "Lumbaca-Unayan",
        "Lumbatan",
        "Lumbayanague",
        "Madalum",
        "Madamba",
        "Maguing",
        "Malabang",
        "Marantao",
        "Marawi",
        "Marogong",
        "Masiu",
        "Mulondo",
        "Pagayawan",
        "Piagapo",
        "Picong",
        "Poona Bayabao",
        "Pualas",
        "Saguiaran",
        "Sultan Dumalodong",
        "Tagaoloan II",
        "Tamparan",
        "Taraka",
        "Tubaran",
        "Tugaya",
        "Wao",
      ];
      let value_array = [
        "Amai-Manabilang",
        "Bacolod-Kalawi",
        "Balabagan",
        "Balindong",
        "Bayang",
        "Binidayan",
        "Buadiposo-Buntong",
        "Bubong",
        "Butig",
        "Calanogas",
        "Ditsaan-Ramain",
        "Ganassi",
        "Kapai",
        "Kapatagan",
        "Lumba-Bayabao",
        "Lumbaca-Unayan",
        "Lumbatan",
        "Lumbayanague",
        "Madalum",
        "Madamba",
        "Maguing",
        "Malabang",
        "Marantao",
        "Marawi",
        "Marogong",
        "Masiu",
        "Mulondo",
        "Pagayawan",
        "Piagapo",
        "Picong",
        "Poona-Bayabao",
        "Pualas",
        "Saguiaran",
        "Sultan-Dumalodong",
        "Tagaoloan-II",
        "Tamparan",
        "Taraka",
        "Tubaran",
        "Tugaya",
        "Wao",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Maguindanao") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Ampatuan",
        "Barira",
        "Buldon",
        "Buluan",
        "DatuAbdullahSangki",
        "DatuAnggalMidtimbang",
        "DatuBlahtSinsuat",
        "DatuHofferAmpatuan",
        "DatuMontawal",
        "DatuOdinSinsuat",
        "DatuPaglas",
        "DatuPiang",
        "DatuSalibo",
        "DatuSaudi-Ampatuan",
        "DatuUnsay",
        "GeneralSalipadaKPendatun",
        "Guindulungan",
        "Kabuntulan",
        "Mamasapano",
        "Mangudadatu",
        "Matanog",
        "NorthernKabuntalan",
        "Pagalungan",
        "Paglat",
        "Pandag",
        "Parang",
        "RajahBuayan",
        "ShariffAguak",
        "ShariffSaydonaMustapha",
        "SouthUpi",
        "SultanKudarat",
        "SultanKudarat",
        "SultanMastura",
        "SultansaBarongis",
        "SultanSumagka",
        "Talayan",
        "Upi",
      ];
      let text_array = [
        "Ampatuan",
        "Barira",
        "Buldon",
        "Buluan",
        "Datu Abdullah Sangki",
        "Datu Anggal Midtimbang",
        "Datu Blaht Sinsuat",
        "Datu Hoffer Ampatuan",
        "Datu Montawal",
        "Datu Odin Sinsuat",
        "Datu Paglas",
        "Datu Piang",
        "Datu Salibo",
        "Datu Saudi-Ampatuan",
        "Datu Unsay",
        "General Salipadak Pendatun",
        "Guindulungan",
        "Kabuntulan",
        "Mamasapano",
        "Mangudadatu",
        "Matanog",
        "Northern Kabuntalan",
        "Pagalungan",
        "Paglat",
        "Pandag",
        "Parang",
        "Rajah Buayan",
        "Shariff Aguak",
        "Shariff Saydona Mustapha",
        "South Upi",
        "Sultan Kudarat",
        "Sultan Kudarat",
        "Sultan Mastura",
        "Sultan sa Barongis",
        "Sultan Sumagka",
        "Talayan",
        "Upi",
      ];
      let value_array = [
        "Ampatuan",
        "Barira",
        "Buldon",
        "Buluan",
        "Datu-Abdullah-Sangki",
        "Datu-Anggal-Midtimbang",
        "Datu-Blaht-Sinsuat",
        "Datu-Hoffer-Ampatuan",
        "Datu-Montawal",
        "Datu-Odin-Sinsuat",
        "Datu-Paglas",
        "Datu-Piang",
        "Datu-Salibo",
        "Datu-Saudi-Ampatuan",
        "Datu-Unsay",
        "General-Salipadak-Pendatun",
        "Guindulungan",
        "Kabuntulan",
        "Mamasapano",
        "Mangudadatu",
        "Matanog",
        "Northern-Kabuntalan",
        "Pagalungan",
        "Paglat",
        "Pandag",
        "Parang",
        "Rajah-Buayan",
        "Shariff-Aguak",
        "Shariff-Saydona-Mustapha",
        "South-Upi",
        "Sultan-Kudarat",
        "Sultan-Kudarat",
        "Sultan-Mastura",
        "Sultan-sa-Barongis",
        "Sultan-Sumagka",
        "Talayan",
        "Upi",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Sulu") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Banguingui",
        "HadjiPanglimaTahil",
        "Indanan",
        "Jolo",
        "KalingalanCaluang",
        "Lugus",
        "Luuk",
        "Maimbung",
        "OldPanamao",
        "Omar",
        "Pandami",
        "PanglimaEstino",
        "Pangutaran",
        "Parang",
        "Parang",
        "Pata",
        "Patikul",
        "Siasi",
        "Talipao",
        "Tapul",
      ];
      let text_array = [
        "Banguingui",
        "Hadji Panglima Tahil",
        "Indanan",
        "Jolo",
        "Kalingalan Caluang",
        "Lugus",
        "Luuk",
        "Maimbung",
        "Old Panamao",
        "Omar",
        "Pandami",
        "Panglima Estino",
        "Pangutaran",
        "Parang",
        "Parang",
        "Pata",
        "Patikul",
        "Siasi",
        "Talipao",
        "Tapul",
      ];
      let value_array = [
        "Banguingui",
        "Hadji-Panglima-Tahil",
        "Indanan",
        "Jolo",
        "Kalingalan-Caluang",
        "Lugus",
        "Luuk",
        "Maimbung",
        "Old-Panamao",
        "Omar",
        "Pandami",
        "Panglima-Estino",
        "Pangutaran",
        "Parang",
        "Parang",
        "Pata",
        "Patikul",
        "Siasi",
        "Talipao",
        "Tapul",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    } else if (province === "Tawi-Tawi") {
      let select = document.getElementById("select-city");

      for (let i = select.options.length - 1; i > 0; i--) {
        select.remove(i);
      }

      let option = select.options[0];
      option.textContent = "-- Municipality/City --";

      let test_array = [
        "Bongao",
        "Languyan",
        "Mapun",
        "PanglimaSugala",
        "Sapa-Sapa",
        "Sibutu",
        "Simunul",
        "Sitangkai",
        "SouthUbian",
        "Tandubas",
        "TurtleIslands",
      ];
      let text_array = [
        "Bongao",
        "Languyan",
        "Mapun",
        "Panglima Sugala",
        "Sapa-Sapa",
        "Sibutu",
        "Simunul",
        "Sitangkai",
        "South Ubian",
        "Tandubas",
        "Turtle Islands",
      ];
      let value_array = [
        "Bongao",
        "Languyan",
        "Mapun",
        "Panglima-Sugala",
        "Sapa-Sapa",
        "Sibutu",
        "Simunul",
        "Sitangkai",
        "South-Ubian",
        "Tandubas",
        "Turtle-Islands",
      ];

      for (let i = 0; i < test_array.length; i++) {
        test_array[i] = document.createElement("option");
        test_array[i].text = `${text_array[i]}`;
        test_array[i].value = value_array[i];
        select.add(test_array[i]);
      }
    }
  }
}
