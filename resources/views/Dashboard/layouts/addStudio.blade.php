<!-- Add Studio Modal -->
<div id="add-studio-modal" class="modal">
    <div class="modal-content p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Add New Studio</h2>
        <button onclick="closeAddStudioModal()" class="text-textMuted hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <form class="space-y-6">
        <div>
          <label for="studio-name" class="block text-light mb-2">Studio Name</label>
          <input type="text" id="studio-name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name">
        </div>

        <div>
          <label for="studio-description" class="block text-light mb-2">Description</label>
          <textarea id="studio-description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="studio-rate" class="block text-light mb-2">Hourly Rate ($)</label>
            <input type="number" id="studio-rate" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75">
          </div>

          <div>
            <label for="studio-location" class="block text-light mb-2">Location</label>
            <input type="text" id="studio-location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State">
          </div>
        </div>

        <div>
          <label for="studio-address" class="block text-light mb-2">Full Address</label>
          <input type="text" id="studio-address" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter street address">
        </div>

        <div>
          <label class="block text-light mb-2">Studio Images</label>
          <div class="border-2 border-dashed border-border rounded-md p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-textMuted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <p class="mt-2 text-sm text-textMuted">Drag and drop images here, or click to browse</p>
            <button type="button" class="mt-4 bg-darkAccent text-light py-2 px-4 rounded-md hover:bg-border transition-colors">Select Files</button>
          </div>
        </div>

        <div class="flex justify-end space-x-4 pt-4 border-t border-border">
          <button type="button" onclick="closeAddStudioModal()" class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-6 rounded-md transition-all duration-200">Cancel</button>
          <button type="button" class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200">Add Studio</button>
        </div>
      </form>
    </div>
  </div>
