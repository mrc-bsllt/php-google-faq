var header = new Vue(
  {
    el: "header",
    data: {
      logo: "googlelogo.svg",
      navLinks: ["Introduzione", "Norme sulla privacy", "Termini di servizio", "Tecnologie", "Domande frequenti"],
      navIndex: 4,
    },
    methods: {
      activeNavLink: function(index) {
        this.navIndex = index;
      }
    }
  }
);

var footer = new Vue(
  {
    el: "footer",
    data: {
      footerLinks: ["Google", "Tutto su Google", "Privacy", "Termini"]
    },
    methods: {}
  }
);
