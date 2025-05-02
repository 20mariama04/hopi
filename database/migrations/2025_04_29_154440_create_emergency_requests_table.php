use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_requests', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id', 50)->notNullable();
            $table->text('description')->notNullable();
            $table->foreignId('doctor_id')->constrained('doctors'); // Ensure 'doctors' table and 'id' column exist
            $table->string('location', 100)->default('Diamniadio');
            $table->enum('status', ['Pending', 'In Progress', 'Treated'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergency_requests');
    }
}