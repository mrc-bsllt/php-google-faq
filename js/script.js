var app = new Vue(
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
