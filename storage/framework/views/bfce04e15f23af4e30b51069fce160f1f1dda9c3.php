

<?php $__env->startSection('title', 'Notifications'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-gray-900">Notifications Management</h1>
            <p class="text-gray-600">Send and manage patient notifications</p>
        </div>

        <!-- Compose Message -->
        <div class="p-6 border-b">
            <h2 class="text-lg font-semibold mb-4">Compose Message</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Message Type</label>
                    <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        <option>Appointment Reminder</option>
                        <option>Emergency Alert</option>
                        <option>Health Campaign</option>
                        <option>General Notice</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Recipients</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select class="flex-1 rounded-l-md border-r-0 border-gray-300">
                            <option>All Patients</option>
                            <option>Selected Departments</option>
                            <option>Individual Patient</option>
                        </select>
                        <button type="button" class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                            Filter
                        </button>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Message Content</label>
                    <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">
                        Save Draft
                    </button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <!-- Sent Messages -->
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-4">Sent Messages</h2>
            <div class="space-y-4">
                <div class="border rounded-lg p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-medium text-gray-900">Appointment Reminder</h3>
                            <p class="text-sm text-gray-500">Sent to: All Cardiology Patients</p>
                            <p class="mt-2 text-gray-600">Please remember your scheduled appointments for this week...</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm text-gray-500">Sent 2 hours ago</span>
                            <div class="mt-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Delivered
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-medium text-gray-900">Health Campaign</h3>
                            <p class="text-sm text-gray-500">Sent to: All Patients</p>
                            <p class="mt-2 text-gray-600">Join us for the upcoming health awareness campaign...</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm text-gray-500">Sent 1 day ago</span>
                            <div class="mt-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Delivered
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/hospital/notifications.blade.php ENDPATH**/ ?>