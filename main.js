







window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});



//** MODAL PARA ICONOS**//
document.addEventListener('DOMContentLoaded', (event) => {
    const servicesInfo = {
        "webDesign": {
          "title": "Diseño de Web",
          "objective": "Crear una interfaz atractiva y fácil de usar que cumpla con tus necesidades y las de tus clientes.",
          "benefits": "Un buen diseño web puede aumentar la visibilidad de tu marca, mejorar la experiencia del usuario y generar más tráfico y ventas."
        },
        "onlineStore": {
          "title": "Tiendas Online",
          "objective": "Proporcionar una plataforma de comercio electrónico segura y eficiente que te permita vender tus productos o servicios en línea.",
          "benefits": "Una tienda online te permite llegar a clientes de todo el mundo, operar las 24 horas del día y proporcionar una experiencia de compra conveniente para tus clientes."
        },
        "landingPageDesign": {
          "title": "Diseño de Landing Page",
          "objective": "Crear páginas de aterrizaje atractivas y efectivas que conviertan a los visitantes en clientes potenciales o ventas.",
          "benefits": "Las páginas de aterrizaje bien diseñadas pueden aumentar la tasa de conversión, mejorar la eficacia de tus campañas publicitarias y generar más ingresos para tu negocio."
        },
        "logoDesign": {
          "title": "Diseño de Logos",
          "objective": "Crear un logo único y memorable que represente la identidad de tu marca.",
          "benefits": "Un buen diseño de logo puede ayudar a establecer la identidad de tu marca, diferenciarte de la competencia y crear una impresión duradera en tus clientes."
        },
        "graphicDesign": {
          "title": "Diseño Gráfico",
          "objective": "Crear diseños visuales atractivos y efectivos para una variedad de medios, incluyendo sitios web, redes sociales, publicidad impresa y más.",
          "benefits": "El diseño gráfico de calidad puede mejorar la imagen de tu marca, atraer la atención de tu público objetivo y comunicar tus mensajes de manera efectiva."
        },
        "communityManager": {
          "title": "Community Manager",
          "objective": "Gestionar y hacer crecer tus comunidades en línea, interactuar con tus seguidores y construir relaciones sólidas con ellos.",
          "benefits": "Un buen community manager puede aumentar el compromiso de tu audiencia, mejorar la reputación de tu marca y conducir más tráfico a tu sitio web o tienda en línea."
        },
        "marketingAndPositioning": {
          "title": "Marketing y Posicionamiento",
          "objective": "Desarrollar e implementar estrategias de marketing efectivas para aumentar la visibilidad de tu marca, atraer a tu público objetivo y posicionar tu producto o servicio en el mercado.",
          "benefits": "El marketing y posicionamiento efectivos pueden aumentar la conciencia de marca, atraer a más clientes potenciales y aumentar las ventas y los ingresos."
        },
        "portfolioDesign": {
          "title": "Diseño de Porfolios",
          "objective": "Crear un portfolio atractivo y profesional que muestre tus habilidades, experiencia y trabajos anteriores.",
          "benefits": "Un buen diseño de portfolio puede ayudarte a destacar entre la competencia, impresionar a los clientes potenciales y ganar más trabajos o proyectos."
        },
        "advertisingCampaigns": {
          "title": "Campañas Publicitarias",
          "objective": "Diseñar e implementar campañas publicitarias efectivas que lleguen a tu público objetivo y promuevan tu producto o servicio.",
          "benefits": "Las campañas publicitarias exitosas pueden aumentar la conciencia de marca, atraer a más clientes y generar más ventas e ingresos."
        }
    };

    document.querySelectorAll('.item').forEach(item => {
        item.addEventListener('click', function() {
            const serviceId = this.dataset.service;
            const serviceInfo = servicesInfo[serviceId];
            document.getElementById('serviceModalLabel').textContent = serviceInfo.title;
            document.getElementById('serviceModalBody').innerHTML = `<h5>Objetivo</h5><p>${serviceInfo.objective}</p><h5>Beneficios</h5><p>${serviceInfo.benefits}</p>`;
        });
    });
});


