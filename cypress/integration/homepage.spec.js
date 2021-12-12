/// <reference types="cypress" />
describe('Loaded homepage', () => {

    it('test nav', () => {
        cy.visit('');
        cy.get('[data-cy = "header_nav"]').should('exist');
        cy.get('[data-cy = "header_nav"]').find('.subtitle-what');
        cy.get('[data-cy = "nav-brand"').should('exist');
        cy.get('[data-cy = "dark-mode"]').should('exist');
        cy.get('[data-cy = "nav-content"]').should('exist');
        cy.get('[data-cy = "nav-content"]').find('.cy').should('have.length', 4);
        cy.get('.cy').invoke('attr', 'href').should('equal', '/');
    })

    it('test header homepage', () => {
        
        cy.get('[data-cy = "heading-site"]').should('exist'); //Selector atributo existe o no
    
        cy.get('[data-cy = "heading-site"]').invoke('text').should('equals', 'Servicios de diseño y desarrollo de sitios web.');
        //Para negar => not.equal
    });

    it('test packages section', () => {
        cy.get('[data-cy = "heading-subtitle"]').should('exist');
        cy.get('[data-cy = "heading-subtitle"]').should('have.prop', 'tagName').should('equal', 'H2');//Comprueba que sea h2
        cy.get('[data-cy = "heading-subtitle"]').invoke('text').should('equals', 'Paquetes web y Servicios a la carta');
        
        cy.get('[data-cy = "packages"]').should('exist');
        cy.get('[data-cy = "content-pack"').should('exist');
        cy.get('[data-cy = "content-pack"]').find('.package').should('have.length', 2);

        cy.get('[data-cy = "packs"]').should('exist');
        cy.get('[data-cy = "packs"]').find('.pack').should('have.length', 6);
    });


    it('test box', () => {
        cy.get('[data-cy = "box"]').should('have.length',4);
        cy.get('[data-cy = "btn btn-outline-primary"]').should('exist').should('have.class', 'btn btn-outline-primary');
    });

    
});