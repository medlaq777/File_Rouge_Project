<!-- Add Studio Modal -->
<div id="add-studio-modal" class="modal">
    <div class="modal-content p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Add New Studio</h2>
        <button onclick="closeAddStudioModal()" class="text-textMuted hover:text-white">
          <i class="fas fa-times h-6 w-6"></i>
        </button>
      </div>
      <form class="space-y-6" action="{{ route('store.studio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div>
          <label for="studio-name" class="block text-light mb-2">Studio Name</label>
          <input type="text" id="studio-name" name="studio-name" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter studio name">
        </div>

        <div>
          <label for="studio-description" class="block text-light mb-2">Description</label>
          <textarea id="studio-description" name="studio-description" rows="4" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Describe your studio"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="studio-price" class="block text-light mb-2">Hourly Rate Max(200$)</label>
            <input type="number" id="studio-price" name="studio-price" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="e.g. 75">
          </div>

          <div>
            <label for="studio-location" class="block text-light mb-2">Location</label>
            <input type="text" id="studio-location" name="studio-location" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="City, State">
          </div>
        </div>

        <div>
          <label for="studio-address" class="block text-light mb-2">Full Address</label>
          <input type="text" id="studio-address" name="studio-address" class="w-full p-3 bg-inputBg border border-border rounded-md text-light shadow-input focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter street address">
        </div>

        <div>
          <label class="block text-light mb-2" for="studio-image">Studio Image</label>
          <input type="file" id="studio-image" name="studio-image" class="hidden" />
          <div class="border-2 border-dashed border-border rounded-md p-8 text-center">
            <i class="fas fa-image mx-auto h-12 w-12 text-textMuted" style="font-size:3rem;"></i>
            <p class="mt-2 text-sm text-textMuted">Drag and drop an image here, or click to browse</p>
            <button type="button" class="mt-4 bg-darkAccent text-light py-2 px-4 rounded-md hover:bg-border transition-colors" onclick="document.getElementById('studio-image').click();">Select File</button>
          </div>
        </div>

        <div class="flex justify-end space-x-4 pt-4 border-t border-border">
          <button type="button" onclick="closeAddStudioModal()" class="bg-transparent hover:bg-darkAccent border border-border text-white py-2 px-6 rounded-md transition-all duration-200">Cancel</button>
          <button type="submit" class="bg-primary hover:bg-primaryHover text-white py-2 px-6 rounded-md transition-all duration-200 cursor-pointer">Add Studio</button>
        </div>
      </form>
    </div>
  </div>
