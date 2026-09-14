export default function Index({ classes }) {
    return (
        <div className="min-h-screen bg-gray-50 p-8">
            <div className="mx-auto max-w-7xl">

                <div className="mb-8 flex items-center justify-between">
                    <div>
                        <h1 className="text-3xl font-bold text-gray-900">
                            My Classes
                        </h1>

                        <p className="mt-1 text-gray-500">
                            Manage your classes and students.
                        </p>
                    </div>

                    <button
                        className="rounded-lg bg-blue-600 px-4 py-2 font-medium text-white hover:bg-blue-700"
                    >
                        Add Class
                    </button>
                </div>

                {classes.length === 0 ? (
                    <div className="rounded-xl border border-dashed bg-white p-12 text-center">
                        <h2 className="text-lg font-semibold">
                            No classes yet
                        </h2>

                        <p className="mt-2 text-gray-500">
                            Create your first class to get started.
                        </p>
                    </div>
                ) : (
                    <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        {classes.map((schoolClass) => (
                            <div
                                key={schoolClass.id}
                                className="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-200"
                            >
                                <div className="flex items-start justify-between">
                                    <div>
                                        <h2 className="text-xl font-semibold text-gray-900">
                                            {schoolClass.name}
                                        </h2>

                                        <p className="mt-1 text-sm text-gray-500">
                                            {schoolClass.academic_year}
                                        </p>
                                    </div>

                                    <span className="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                        {schoolClass.type}
                                    </span>
                                </div>

                                <div className="mt-6">
                                    <a
                                        href={`/classes/${schoolClass.id}`}
                                        className="text-sm font-medium text-blue-600 hover:text-blue-700"
                                    >
                                        View class →
                                    </a>
                                </div>
                            </div>
                        ))}
                    </div>
                )}

            </div>
        </div>
    );
}
