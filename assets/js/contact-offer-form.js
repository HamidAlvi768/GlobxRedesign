/**
 * Contact & Offer Form Handler
 * Manages form type switching and dynamic parts management
 */

class ContactOfferForm {
    constructor() {
        this.init();
    }

    init() {
        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setupForm());
        } else {
            this.setupForm();
        }
    }

    setupForm() {
        this.setupFormTypeSwitching();
        this.setupPartsManagement();
    }

    setupFormTypeSwitching() {
        const formTypeRadios = document.querySelectorAll('input[name="formType"]');
        const contactContent = document.getElementById('contact-form-content');
        const offerContent = document.getElementById('offer-form-content');

        if (!formTypeRadios.length || !contactContent || !offerContent) return;

        formTypeRadios.forEach(radio => {
            radio.addEventListener('change', (e) => {
                if (e.target.value === 'contact') {
                    contactContent.style.display = 'block';
                    offerContent.style.display = 'none';
                } else if (e.target.value === 'offer') {
                    contactContent.style.display = 'none';
                    offerContent.style.display = 'block';
                }
            });
        });
    }

    setupPartsManagement() {
        const partsContainer = document.getElementById('gx-parts-container');
        if (!partsContainer) return;

        // Handle add part button clicks
        partsContainer.addEventListener('click', (e) => {
            if (e.target.closest('.gx-part-add-btn')) {
                this.addPartRow();
            } else if (e.target.closest('.gx-part-remove-btn')) {
                this.removePartRow(e.target.closest('.gx-part-row'));
            }
        });

        // Initialize the first row
        this.updatePartRowControls();
    }

    addPartRow() {
        const partsContainer = document.getElementById('gx-parts-container');
        const existingRows = partsContainer.querySelectorAll('.gx-part-row');
        const newPartId = existingRows.length + 1;

        const newRow = document.createElement('div');
        newRow.className = 'gx-part-row';
        newRow.setAttribute('data-part-id', newPartId);

        newRow.innerHTML = `
            <div class="gx-part-number-field">
                <input type="text" name="part-number[]" placeholder="Part number" class="gx-part-input">
            </div>
            <div class="gx-part-quantity-field">
                <input type="number" name="part-quantity[]" placeholder="Quantity" class="gx-part-input" min="1">
            </div>
            <div class="gx-part-controls">
                <button type="button" class="gx-part-add-btn" title="Add Part">
                    <i class="fas fa-plus"></i>
                </button>
                <button type="button" class="gx-part-remove-btn" title="Remove Part">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        `;

        partsContainer.appendChild(newRow);
        this.updatePartRowControls();
    }

    removePartRow(rowToRemove) {
        if (rowToRemove) {
            rowToRemove.remove();
            this.updatePartRowControls();
        }
    }

    updatePartRowControls() {
        const partsContainer = document.getElementById('gx-parts-container');
        if (!partsContainer) return;

        const rows = partsContainer.querySelectorAll('.gx-part-row');
        
        rows.forEach((row, index) => {
            const addBtn = row.querySelector('.gx-part-add-btn');
            const removeBtn = row.querySelector('.gx-part-remove-btn');

            if (addBtn && removeBtn) {
                // Show remove button for all rows except the first one
                removeBtn.style.display = index === 0 ? 'none' : 'inline-block';
                
                // Show add button only on the last row
                addBtn.style.display = index === rows.length - 1 ? 'inline-block' : 'none';
            }
        });
    }
}

// Initialize the form handler
const contactOfferForm = new ContactOfferForm();

// Make it globally available
window.contactOfferForm = contactOfferForm;
